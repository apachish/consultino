<?php

namespace App\Orchid\Screens\Portfolio;

use App\Models\Portfolio;
use App\Orchid\Layouts\Portfolio\PortfoliosListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class PortfolioListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'portfolios' => Portfolio::defaultSort('updated_at', 'desc')
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
        return 'portfolios List';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'You can change the portfolio of the site from here.';
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
                ->route('platform.systems.portfolios.create'),
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
            PortfoliosListLayout::class,

        ];
    }

    public function remove(Request $request): void
    {
        Portfolio::findOrFail($request->get('id'))->delete();

        Toast::info(__('Portfolio was removed'));
    }
}
