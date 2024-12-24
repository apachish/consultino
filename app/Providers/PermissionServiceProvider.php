<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\Dashboard;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(Dashboard $dashboard): void
    {
        $permissions = ItemPermission::group('doctors')
            ->addPermission('platform.systems.doctors', 'Access to add Doctor')
            ;

        $dashboard->registerPermissions($permissions);
    }
}
