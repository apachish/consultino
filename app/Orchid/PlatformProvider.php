<?php

declare(strict_types=1);

namespace App\Orchid;

use App\Models\File;
use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Dashboard $dashboard
     *
     * @return void
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * Register the application menu.
     *
     * @return Menu[]
     */
    public function menu(): array
    {
        $count = File::with(['doctors' => function ($query) {
                $query->with(['timeslots.date']);
            }])->whereHas("doctors",function ($query){
                $query->where("doctor_id",data_get(auth()->user()->doctor,'id'));
            })->count();
        return [
            Menu::make(__('Dashboard'))
                ->icon('bs.book')
                ->route('platform.main')
            ->divider(),

            Menu::make(__('Users'))
                ->icon('bs.people')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('User Controls')),

            Menu::make(__('Doctors'))
                ->icon('bs.person-hearts')
                ->route('platform.systems.doctors')
                ->permission('platform.systems.users'),
            Menu::make(__('Customers Site'))
                ->icon('bs.emoji-grin')
                ->route('platform.systems.customers')
                ->permission('platform.systems.users'),

            Menu::make(__('Roles'))
                ->icon('bs.shield')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles')
                ->divider(),

            Menu::make(__('Customers'))
                ->icon('bs.person-lines-fill')
                ->route('platform.systems.doctor.appointment')
                ->permission('platform.systems.users')
                ->title(__('Doctor'))->badge(fn () => $count),
            Menu::make(__('Consultation hours'))
                ->icon('bs.person-lines-fill')
                ->route('platform.systems.doctor.appointment.time')
                ->permission('platform.systems.users')
            ->divider(),


            Menu::make(__('Blogs'))
                ->icon('bs.file-earmark-medical-fill')
                ->route('platform.systems.blogs')
                ->permission('platform.systems.users')
                ->title(__('Site')),

            Menu::make(__('Expertises'))
                ->icon('bs.columns-gap')
                ->route('platform.systems.expertises')
                ->permission('platform.systems.users'),
            Menu::make(__('Settings'))
                ->icon('bs.gear')
                ->route('platform.systems.settings')
                ->permission('platform.systems.users'),
            Menu::make(__('Sliders'))
                ->icon('bs.sliders')
                ->route('platform.systems.sliders')
                ->permission('platform.systems.users'),
            Menu::make(__('Links'))
                ->icon('bs.link-45deg')
                ->route('platform.systems.links')
                ->permission('platform.systems.users'),
            Menu::make(__('Services'))
                ->icon('bs.columns-gap')
                ->route('platform.systems.services')
                ->permission('platform.systems.users'),
            Menu::make(__('Portfolios'))
                ->icon('bs.files')
                ->route('platform.systems.portfolios')
                ->permission('platform.systems.users')
                ->divider(),
            Menu::make(__("Help"))
                ->icon('bs.collection')
                ->route('platform.help'),
        ];
    }

    /**
     * Register permissions for the application.
     *
     * @return ItemPermission[]
     */
    public function permissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
