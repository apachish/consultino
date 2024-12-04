<?php

namespace App\Orchid\Screens\Slider;

use App\Models\Slider;
use App\Orchid\Layouts\Slider\SliderFiltersLayout;
use Orchid\Screen\Screen;

class SliderListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'sliders' => Slider::filters(SliderFiltersLayout::class)
                ->defaultSort('updated_at', 'desc')
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
        return 'slider List';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'You can change the static content of the site from here.';
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
//            Link::make(__('Add'))
//                ->icon('bs.plus-circle')
//                ->route('platform.systems.settings.create'),
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
            SettingFiltersLayout::class,
            SettingListLayout::class,

        ];
    }

    /**
     * Loads user data when opening the modal window.
     *
     * @return array
     */
    public function loadUserOnOpenModal(Slider $slider): iterable
    {
        return [
            'slider' => $slider,
        ];
    }
}
