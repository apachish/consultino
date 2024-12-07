<?php

namespace App\Orchid\Screens\Link;

use App\Models\Link as LinkModel;
use App\Orchid\Layouts\Link\LinkListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class LinkListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'links' => LinkModel::defaultSort('updated_at', 'desc')
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
        return 'Link List';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'You can change the Link of the site from here.';
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
                ->route('platform.systems.links.create'),
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
            LinkListLayout::class,

        ];
    }
}
