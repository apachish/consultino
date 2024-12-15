<?php

namespace App\Orchid\Layouts;

use App\Orchid\Fields\ImagePreview;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Listener;
use Orchid\Screen\Repository;
use Orchid\Support\Facades\Layout;

class SubtractListener extends Listener
{

    protected $selectedType ="iframe";

    /**
     * List of field names for which values will be listened.
     *
     * @var string[]
     */
    protected $targets = [
        "subtract.type",
    ];

    public function __construct($type = null)
    {
        $this->selectedType = $type;
    }
    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    protected function layouts(): iterable
    {
        $this->selectedType = request()->input('subtract.type',$this->selectedType);

        return [
            Layout::rows([

                Input::make('subtract.url')
                    ->title('Video URL')
                    ->placeholder('Enter the video URL')
                    ->canSee($this->selectedType === 'iframe'), // بررسی مقدار مستقیم


                Input::make('subtract.image')
                    ->type('file')
                    ->title('Upload Image')
                    ->accept('image/*')
                    ->help('Select an image file. You can upload files in any image format, such as JPG, PNG, or GIF.')
                    ->canSee($this->selectedType === 'image'), // بررسی مقدار مستقیم


                Matrix::make('subtract.images')
                    ->columns([
                        'title',
                        'image',
                    ])
                    ->fields([
                        'title' => Input::make()->type('title'),
                        'image' =>Input::make('image')
                            ->type('file')
                            ->title('Upload Image')
                            ->accept('image/*')
                            ->help('Select an image file. You can upload files in any image format, such as JPG, PNG.')
                        ,
                    ])->canSee($this->selectedType === 'slider'),

                ImagePreview::make('subtract.picture')
                    ->set('type_view',$this->selectedType)
                    ->canSee(in_array($this->selectedType ,[ 'image','slider']))
                ,

            ]),
        ];
    }

    /**
     * Update state
     *
     * @param \Orchid\Screen\Repository $repository
     * @param \Illuminate\Http\Request $request
     *
     * @return \Orchid\Screen\Repository
     */
    public function handle(Repository $repository, Request $request): Repository
    {
        $type = $request->input('subtract.type','iframe');
        return $repository->set('type', $type);
    }
}
