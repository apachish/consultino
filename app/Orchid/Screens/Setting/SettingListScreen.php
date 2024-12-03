<?php

namespace App\Orchid\Screens\Setting;

use App\Models\Setting;
use App\Orchid\Layouts\Setting\SettingFiltersLayout;
use Orchid\Support\Facades\Layout;
use App\Orchid\Layouts\Setting\SettingEditLayout;
use App\Orchid\Layouts\Setting\SettingListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class SettingListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'settings' => Setting::filters(SettingFiltersLayout::class)
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
        return 'Setting List';
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
            Link::make(__('Add'))
                ->icon('bs.plus-circle')
                ->route('platform.systems.settings.create'),
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
    public function loadUserOnOpenModal(Setting $setting): iterable
    {
        return [
            'setting' => $setting,
        ];
    }
}
