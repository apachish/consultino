<?php

namespace App\Orchid\Layouts\Article;

use App\Models\Article;
use App\Models\Tag;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class ArticleEditLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        $selectedType = request()->input('article.type');

        return [ Input::make('article.title')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Title'))
            ->placeholder(__('Name')),
            Relation::make('article.category')
                ->fromModel(Article::class, 'category')
                ->allowAdd(true)
                ->applyScope('group') // اعمال scope گروه‌بندی
                ->title(__('Category')),
            Relation::make('article.category')
                ->fromModel(Tag::class, 'title')
                ->allowAdd(true)
                ->multiple()
                ->title(__('tag')),
            TextArea::make('article.description')
                ->title(__('Description'))
                ->required()
                ->rows(6),
            Quill::make('article.body')
                ->title(__('Body'))
                ->popover('Quill is a free, open source WYSIWYG editor built for the modern web.'),

            Input::make('article.sort_order')
                ->type('number')
                ->max(255)
                ->title(__('sort Order'))
                ->placeholder(1),
            Select::make('article.type')
                ->title('Select Type')
                ->options([
                    'image' => 'Image',
                    'iframe' => 'Iframe',
                    'slide' => 'Slider',
                ])
                ->empty('Select a type', '') // گزینه پیش‌فرض
                ->help('Choose whether you want to upload an image or a video.')
                ->addAttributes(['id' => 'select-type']), // شنونده برای تغییر

            Input::make('article.url')
                ->title('Video URL')
                ->placeholder('Enter the video URL')
                ->canSee($selectedType === 'video'), // بررسی مقدار مستقیم


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



            Select::make('article.status')
                ->options([
                    true=> __("Active"),
                    false => __("Deactivate"),
                ])
                ->title('Status')

        ];
    }
}
