<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Article;

use App\Models\Article;
use App\Models\Service;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Color;

class ArticleListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'articles';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title', __('Title'))
                ->sort()
                ->cantHide()
                ->filter(Input::make()),
            TD::make('slug', __('Slug'))
                ->sort()
                ->cantHide()
                ->filter(Input::make()),

            TD::make('is_published', __('Status'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(fn($article) => e($article->is_published?
                    Button::make('Active')->method('buttonClickProcessing')->type(Color::SUCCESS):
                    Button::make('Deactivate')->method('buttonClickProcessing')->type(Color::DANGER)
                )),

            TD::make('updated_at', __('Last edit'))
                ->usingComponent(DateTimeSplit::class)
                ->align(TD::ALIGN_RIGHT)
                ->sort(),
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Article $article) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.systems.blogs.edit', $article->id)
                            ->icon('bs.pencil'),
                        Button::make(__('Delete'))
                            ->icon('bs.trash3')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $article->id,
                            ]),
                    ])),
        ];
    }
}
