<?php

namespace App\Orchid\Screens\Portfolio;

use App\Models\Portfolio;
use App\Orchid\Layouts\Portfolio\PortfolioEditLayout;
use App\Orchid\Layouts\SubtractListener;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\ImageManager;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class PortfolioEditScreen extends Screen
{
    /**
     * @var Portfolio
     */
    public $portfolio;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Portfolio $portfolio): iterable
    {
        return [
            'portfolio' => $portfolio,
            'parameter' => $portfolio->parameter(), // واکشی مقدار subtitle

        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->portfolio->id ? 'Edit Portfolio' : 'Create Portfolio';
    }


    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return $this->portfolio->id ? 'Edit Portfolio' : 'Create Portfolio';
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
            PortfolioEditLayout::class,
            SubtractListener::class,

        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Portfolio $portfolio, Request $request)
    {
        $hasImage = $portfolio && $portfolio->image;

        $request->validate([
            'portfolio.title' => [
                'required',
            ],
            'portfolio.image' => $hasImage ? ['nullable', 'file', 'mimes:jpg,png,jpeg,webp'] : ['required', 'file', 'mimes:jpg,png,jpeg,webp'],

            'portfolio.category' => [
                'required'
            ],
            'portfolio.sort_order' => [
                'required', 'min:1'
            ],
            'subtract.type' => [
                'required', Rule::in(["image", "iframe", "slider"])
            ],

            'subtract.images' => [
                'required_if:subtract.type,slider'
            ],
            'subtract.images.*.image' => [
                'required_if:subtract.type,slider', 'extensions:jpg,png,jpeg,webp'
            ],
            'subtract.images.*.title' => [
                'required_if:subtract.type,slider'
            ],
            'subtract.image' => [
                'required_if:subtract.type,image', 'extensions:jpg,png,jpeg,webp'
            ],
            'subtract.url' => [
                'required_if:subtract.type,iframe', 'url:http,https'
            ],


        ]);

        $data = $request->collect('portfolio');
        $subtracts = $request->collect('subtract');
        $data = $data->toArray();
        $data['type'] = $subtracts['type'];
        $image = $request->file('portfolio.image');

        if ($image) {
            // ذخیره‌سازی فایل
//            $imagePath = $image->store('portfolio', 'images');
            $image_name = $this->saveImage($image,150,100);

            $url_image = url("images/portfolio/" . $image_name);
            $data['image'] = $url_image;
        }
        $data["slug"] = slug_seo($data['title']);
        if ($portfolio->id)
            $portfolio->update($data);
        else
            $portfolio = $portfolio->create($data);

        $parameters = $request->collect('parameter');
        if ($request->get('datepickerDate')) {
            $parameters['date'] = ["value" => Carbon::parse((int)$request->get('datepickerDate'))->format('Y-m-d')];
        }
        foreach ($parameters as $key => $value) {

            if (data_get($value, 'value')) {
                $portfolio->parameters()->updateOrCreate([
                    'portfolio_id' => $portfolio->id,
                    'key' => $key,
                ], [
                    'value' => $value['value'],
                ]);
            }
        }

        switch ($subtracts['type']) {
            case 'slider':
                $slides = [];
                foreach (data_get($subtracts, 'images', []) as $key => $item) {
                    $slide['title'] = $item['title'];
                    $file = $request->file("subtract.images.$key.image");
                    if ($file) {
                        // ذخیره‌سازی فایل
//                        $imagePath = $file->store('portfolio', 'images');
                        $image_name = $this->saveImage($file,800,400);

                        $slide['image'] = url("images/portfolio/" . $imagePath);
                    }
                    $slides[] = $slide;
                }
                $portfolio->parameters()->updateOrCreate([
                    'portfolio_id' => $portfolio->id,
                    'key' => 'images',
                ], [
                    'value' => json_encode($slides),
                ]);


                break;
            case 'image':
                $image = $request->file('subtract.image');

                if ($image) {
                    // ذخیره‌سازی فایل
//                    $imagePath = $image->store('portfolio', 'images');
                    $image_name = $this->saveImage($image,800,400);
                    $url_image = url("images/portfolio/" . $image_name);
                    $portfolio->parameters()->updateOrCreate([
                        'portfolio_id' => $portfolio->id,
                        'key' => 'image',
                    ], [
                        'value' => $url_image,
                    ]);
                }

                break;
            case 'iframe':
                $portfolio->parameters()->updateOrCreate([
                    'portfolio_id' => $portfolio->id,
                    'key' => 'iframe',
                ], [
                    'value' => data_get($subtracts, 'url'),
                ]);
                break;
        }


        Toast::info(__('Portfolio was saved.'));

        return redirect()->route('platform.systems.portfolios');
    }

    public function saveImage(array|\Illuminate\Http\UploadedFile $image,$width,$heigt): string
    {
        $mimeType = $image->getMimeType();

        $manager = new ImageManager(new Driver());
        $filename = time() . '_portfolio.' . $image->getClientOriginalExtension();

        // مسیر ذخیره‌سازی کامل در دیسک خارجی
        $externalPath = Storage::disk('external_uploads_images')->path("portfolio/" . $filename);

        $img = $manager->read($image);

        $img->scale(width: $width, height: $heigt);

        $img->save($externalPath);
        return $filename;
    }
}
