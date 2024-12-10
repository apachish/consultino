<?php

namespace App\Orchid\Screens\Article;

use App\Models\Article;
use App\Models\Service;
use App\Orchid\Layouts\Article\ArticleListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class ArticleListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'services' => Service::defaultSort('updated_at', 'desc')
                ->paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Article List';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'You can view, edit, and delete the list of articles.';
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
            Link::make(__('Add'))
                ->icon('bs.plus-circle')
                ->route('platform.systems.blogs.create'),
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
            ArticleListLayout::class,

        ];
    }

    public function remove(Request $request): void
    {
        Article::findOrFail($request->get('id'))->delete();

        Toast::info(__('Article was removed'));
    }
}
