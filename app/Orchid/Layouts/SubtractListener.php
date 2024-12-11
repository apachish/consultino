<?php

namespace App\Orchid\Layouts;

use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Listener;
use Orchid\Screen\Repository;
use Orchid\Support\Facades\Layout;

class SubtractListener extends Listener
{
    /**
     * List of field names for which values will be listened.
     *
     * @var string[]
     */
    protected $targets = [
        'article.type',
    ];

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    protected function layouts(): iterable
    {
        $selectedType = request()->input('article.type');

        return [
            Layout::rows([
                Input::make('article.url')
                    ->title('Video URL')
                    ->placeholder('Enter the video URL')
                    ->canSee($selectedType === 'iframe'), // بررسی مقدار مستقیم


                Picture::make('article.image')
                    ->title('Upload Image')
                    ->minCanvas(500)
                    ->maxWidth(102)
                    ->maxHeight(78)
                    ->storage('images')
                    ->accept('image/*')
                    ->required()
                    //                    ->multiple()
                    ->help('Select an image file. You can upload files in any image format, such as JPG, PNG, or GIF.')
                    ->canSee($selectedType === 'image'), // بررسی مقدار مستقیم
                Matrix::make('matrix')
                    ->columns([
                        'title',
                        'image',
                    ])
                    ->fields([
                        'title'   => Input::make()->type('title'),
                        'image' => Input::make('picture')
                            ->type('file')
                            ->title('Upload Image')
                            ->accept('image/*')
                            ->required(),
                    ])->canSee($selectedType === 'slider')

            ]),
        ];
    }

    /**
     * Update state
     *
     * @param \Orchid\Screen\Repository $repository
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Orchid\Screen\Repository
     */
    public function handle(Repository $repository, Request $request): Repository
    {
        $type = $request->input('article.type');
        return $repository->set('type', $type);
    }

    public function save(Request $request)
    {
        dd($request->all());
        $file = $request->file('image'); // فایل تصویر از فرم

        // ذخیره فایل در مسیر public/storage/images
        $path = $file->store('images', 'public');

        // ذخیره مسیر فایل در دیتابیس
        Picture::create([
            'name' => $file->getClientOriginalName(),
            'image' => $path,
        ]);
    }
}
