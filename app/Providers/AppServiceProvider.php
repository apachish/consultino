<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Orchid\Platform\Events\UploadFileEvent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(function (UploadFileEvent $event) {
            // Your logic here to handle the event
            // $event->attachment
            // $event->time
        });
        view()->composer('*', function ($view) {
            $settings = Setting::where("status", 1)->get()->keyBy('key');
            $view->telephone = data_get($settings, 'telephone.value');
            $view->email = data_get($settings, 'email.value');
            $view->working_hours = data_get($settings, 'working_hours.value');
            $view->logo = data_get($settings, 'logo.value');
            $view->address = data_get($settings, 'address.value');
            $view->description_footer = data_get($settings, 'description_footer.value');
            $view->logo_footer = data_get($settings, 'logo_footer.value');
            $view->social = json_decode(data_get($settings, 'social.value'),true);
            $view->copyright = data_get($settings, 'copyright.value');
        });
    }
}
