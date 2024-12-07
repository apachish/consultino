<?php

namespace App\Orchid\Screens\Slider;

use App\Models\Slider;
use App\Orchid\Layouts\Slider\SliderEditLayout;
use App\Orchid\Layouts\Slider\SliderListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;

use Orchid\Screen\Screen;
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
            'slider'       => $slider
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
        return [
            SliderEditLayout::class
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Slider $slider, Request $request)
    {

        $request->validate([
            'slider.title' => [
                'required',
            ],
            'slider.image' => [
                'required'
            ],
            'slider.key.button1_link' => [
                'nullable','url:http,https'
            ],
            'slider.key.button1_link' => [
                'nullable','url:http,https'
            ],

        ]);

        $data = $request->collect('slider');
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
        $data['sort_order'] = 1;
        if($slider->id)
        $slider->update($data->toArray());
        else
            $slider->create($data->toArray());



        Toast::info(__('Slider was saved.'));

        return redirect()->route('platform.systems.sliders');
    }

}
