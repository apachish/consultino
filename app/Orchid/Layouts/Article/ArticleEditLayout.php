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

        return [
            Input::make('article.title')
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
            Relation::make('article.tags')
                ->fromModel(Tag::class, 'title')
                ->allowAdd(true)
                ->multiple()
                ->title(__('tag')),
            TextArea::make('article.description')
                ->title(__('Description'))
                ->required()
                ->rows(6),
            Quill::make('article.body')
                ->title(__('Body')),
            Select::make('article.is_published')
                ->options([
                    true=> __("Active"),
                    false => __("Deactivate"),
                ])
                ->title('Status'),
            Select::make('subtract.type')
                ->title('Select Type')
                ->options([
                    'image' => 'Image',
                    'iframe' => 'Iframe',
                    'slider' => 'Slider',
                ])
                ->empty(__('Select a type'), '') // گزینه پیش‌فرض
                ->help('Choose whether you want to upload an image or a video link.')
            , // شنونده برای تغییر



        ];
    }
}
