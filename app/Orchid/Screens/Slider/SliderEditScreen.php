<?php

namespace App\Orchid\Screens\Slider;

use App\Models\Slider;
use App\Orchid\Layouts\Slider\SliderEditLayout;
use App\Orchid\Layouts\Slider\SliderListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;

use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class SliderEditScreen extends Screen
{
    /**
     * @var Slider
     */
    public $slider;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Slider $slider): iterable
    {
        return [
            'slider' => $slider,
            'parameter' => $slider->parameter(), // واکشی مقدار subtitle

        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->slider->id ? 'Edit Slider' : 'Create Slider';
    }


    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return $this->slider->id ? 'Edit Slider' : 'Create Slider';
    }

    public function permission(): ?iterable
    {
        return [
            'platform.systems.users',
        ];
    }


    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Save'))
                ->icon('bs.check-circle')
                ->method('save'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        $imagePath = $this->slider->image ?? null;
        $video = data_get($this->slider->parameter(),'video.value') ;
        return [
            $imagePath ? Layout::columns([
                SliderEditLayout::class,
                Layout::view('partials.preview', ['imagePath' => $imagePath, 'video' => $video]),
            ]) : SliderEditLayout::class
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Slider $slider, Request $request)
    {
        $hasImage = $slider && $slider->image;

        $request->validate([
            'slider.title' => [
                'required',
            ],
            'slider.image' => $hasImage ? ['nullable', 'file', 'mimes:jpg,jpeg,png,webp'] : ['required', 'file', 'mimes:jpg,jpeg,png,webp'],
            'parameter.video.value' => [
                'nullable', 'extensions:mp4'// ['video/mp4', 'video/x-m4v', 'video/avi', 'video/mkv']

            ],
            'parameter.button1_link.value' => [
                'nullable', 'url:http,https'
            ],
            'parameter.button2_link.value' => [
                'nullable', 'url:http,https'
            ],

        ]);

        $data = $request->collect('slider');
        $parameters = $request->collect('parameter');
//        if ($request->file()) {
//            $file = $request->file('value');
//            if(file_exists($slider->value)) {
//                dd("w");
//            }
//            $fileName = time() . '_' . $file->getClientOriginalName();
//            dd($fileName);
//            Storage::disk('images')->put($fileName, $file);
//
//        }

        $image = $request->file('slider.image');

        if ($image) {
            // بررسی نوع MIME فایل
            $mimeType = $image->getMimeType();


            // ذخیره‌سازی فایل
            $imagePath = $image->store('images', 'images');
            $data["image"] = url("images/" . $imagePath);
        }

        $data['sort_order'] = Slider::count() + 1;
        if ($slider->id)
            $slider->update($data->toArray());
        else
            $slider = $slider->create($data->toArray());

        $video = $request->file('parameter.video.value');
        if ($video) {

            $videoPath = $video->store('videos', 'videos');
            if($videoPath) {
                $slider->parameters()->updateOrCreate([
                    'slide_id' => $slider->id,
                    'key' => "video",
                ], [
                    'value' => url("videos/".$videoPath),
                ]);
            }
        }
        foreach ($parameters as $key => $value) {

            if (data_get($value, 'value')) {
                $slider->parameters()->updateOrCreate([
                    'slide_id' => $slider->id,
                    'key' => $key,
                ], [
                    'value' => $value['value'],
                ]);
            }
        }
        Toast::info(__('Slider was saved.'));

        return redirect()->route('platform.systems.sliders');
    }

}
