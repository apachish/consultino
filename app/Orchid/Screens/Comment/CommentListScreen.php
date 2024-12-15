<?php

namespace App\Orchid\Screens\Comment;

use App\Models\Comment;
use App\Orchid\Layouts\Comment\CommentListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class CommentListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'comments' => Comment::with("parent")->defaultSort('updated_at', 'desc')
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
        return 'Comment List';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'You can see and change status  the comment of the site from here.';
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
            CommentListLayout::class,

        ];
    }

    public function remove(Request $request): void
    {
        Comment::findOrFail($request->get('id'))->delete();

        Toast::info(__('Comment was removed'));
    }
}
