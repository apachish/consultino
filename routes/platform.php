<?php

declare(strict_types=1);

use App\Orchid\Screens\Doctor\DoctorEditScreen;
use App\Orchid\Screens\Examples\ExampleActionsScreen;
use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleGridScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');
Route::screen('dashboard', \App\Orchid\Screens\Dashboard::class)
    ->name('platform.dashboard')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Dashboard')));
// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Platform > System > Users > User
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push($user->name, route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

Route::screen('doctors', \App\Orchid\Screens\Doctor\DoctorListScreen::class)
    ->name('platform.systems.doctors')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Doctors'), route('platform.systems.doctors')));

// Platform > System > doctors > Create
Route::screen('doctors/create', DoctorEditScreen::class)
    ->name('platform.systems.doctors.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.doctors')
        ->push(__('Create'), route('platform.systems.doctors.create')));

// Platform > System > doctors > Doctor
Route::screen('doctors/{doctor}/edit', DoctorEditScreen::class)
    ->name('platform.systems.doctors.edit')
    ->breadcrumbs(fn (Trail $trail, $docter) => $trail
        ->parent('platform.systems.doctors')
        ->push($docter->user->name, route('platform.systems.doctors.edit', $docter)));




Route::screen('customers', \App\Orchid\Screens\Customer\CustomerListScreen::class)
    ->name('platform.systems.customers')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Customers'), route('platform.systems.customers')));
/*
 * setting
 */
Route::screen('settings', \App\Orchid\Screens\Setting\SettingListScreen::class)
    ->name('platform.systems.settings')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('settings'), route('platform.systems.settings')));
// Platform > System > setting > Create
Route::screen('settings/create', \App\Orchid\Screens\Setting\SettingEditScreen::class)
    ->name('platform.systems.settings.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.settings')
        ->push(__('Create'), route('platform.systems.settings.create')));

// Platform > System > setting > Doctor
Route::screen('settings/{setting}/edit', \App\Orchid\Screens\Setting\SettingEditScreen::class)
    ->name('platform.systems.settings.edit')
    ->breadcrumbs(fn (Trail $trail, $setting) => $trail
        ->parent('platform.systems.settings')
        ->push($setting->title, route('platform.systems.settings.edit', $setting)));


Route::screen('sliders', \App\Orchid\Screens\Slider\SliderListScreen::class)
    ->name('platform.systems.sliders')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('sliders'), route('platform.systems.sliders')));

// Platform > System > slider > Create
Route::screen('sliders/create', \App\Orchid\Screens\Slider\SliderEditScreen::class)
    ->name('platform.systems.sliders.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.sliders')
        ->push(__('Create'), route('platform.systems.sliders.create')));

// Platform > System > slider > Doctor
Route::screen('sliders/{slider}/edit', \App\Orchid\Screens\Slider\SliderEditScreen::class)
    ->name('platform.systems.sliders.edit')
    ->breadcrumbs(fn (Trail $trail, $slider) => $trail
        ->parent('platform.systems.sliders')
        ->push($slider->title, route('platform.systems.sliders.edit', $slider)));


Route::screen('links', \App\Orchid\Screens\Link\LinkListScreen::class)
    ->name('platform.systems.links')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('links'), route('platform.systems.links')));

// Platform > System > link > Create
Route::screen('links/create', \App\Orchid\Screens\Link\LinkEditScreen::class)
    ->name('platform.systems.links.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.links')
        ->push(__('Create'), route('platform.systems.links.create')));

// Platform > System > link > Doctor
Route::screen('links/{link}/edit', \App\Orchid\Screens\Link\LinkEditScreen::class)
    ->name('platform.systems.links.edit')
    ->breadcrumbs(fn (Trail $trail, $link) => $trail
        ->parent('platform.systems.links')
        ->push($link->title, route('platform.systems.links.edit', $link)));

Route::screen('services', \App\Orchid\Screens\Service\ServiceListScreen::class)
    ->name('platform.systems.services')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('services'), route('platform.systems.services')));

// Platform > System > service > Create
Route::screen('services/create', \App\Orchid\Screens\Service\ServiceEditScreen::class)
    ->name('platform.systems.services.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.services')
        ->push(__('Create'), route('platform.systems.services.create')));

// Platform > System > service > Doctor
Route::screen('services/{service}/edit', \App\Orchid\Screens\Service\ServiceEditScreen::class)
    ->name('platform.systems.services.edit')
    ->breadcrumbs(fn (Trail $trail, $service) => $trail
        ->parent('platform.systems.services')
        ->push($service->title, route('platform.systems.services.edit', $service)));

Route::screen('portfolios', \App\Orchid\Screens\Portfolio\PortfolioListScreen::class)
    ->name('platform.systems.portfolios')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('portfolios'), route('platform.systems.portfolios')));
// Platform > System > portfolio > Create
Route::screen('portfolios/create', \App\Orchid\Screens\Portfolio\PortfolioEditScreen::class)
    ->name('platform.systems.portfolios.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.portfolios')
        ->push(__('Create'), route('platform.systems.portfolios.create')));

// Platform > System > portfolio > Doctor
Route::screen('portfolios/{portfolio}/edit', \App\Orchid\Screens\Portfolio\PortfolioEditScreen::class)
    ->name('platform.systems.portfolios.edit')
    ->breadcrumbs(fn (Trail $trail, $portfolio) => $trail
        ->parent('platform.systems.portfolios')
        ->push($portfolio->title, route('platform.systems.portfolios.edit', $portfolio)));


Route::screen('expertises', \App\Orchid\Screens\Expertise\ExpertiseListScreen::class)
    ->name('platform.systems.expertises')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Expertises'), route('platform.systems.expertises')));

// Platform > System > expertise > Create
Route::screen('expertises/create', \App\Orchid\Screens\Expertise\ExpertiseEditScreen::class)
    ->name('platform.systems.expertises.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.expertises')
        ->push(__('Create'), route('platform.systems.expertises.create')));

// Platform > System > Expertise > edit
Route::screen('expertises/{expertise}/edit', \App\Orchid\Screens\Expertise\ExpertiseEditScreen::class)
    ->name('platform.systems.expertises.edit')
    ->breadcrumbs(fn (Trail $trail, $expertise) => $trail
        ->parent('platform.systems.expertises')
        ->push($expertise->name, route('platform.systems.expertises.edit', $expertise)));


Route::screen('blogs', \App\Orchid\Screens\Article\ArticleListScreen::class)
    ->name('platform.systems.blogs')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('blogs'), route('platform.systems.blogs')));
// Platform > System > article > Create
Route::screen('blogs/create', \App\Orchid\Screens\Article\ArticleEditScreen::class)
    ->name('platform.systems.blogs.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.blogs')
        ->push(__('Create'), route('platform.systems.blogs.create')));

// Platform > System > article > edit
Route::screen('blogs/{article}/edit', \App\Orchid\Screens\Article\ArticleEditScreen::class)
    ->name('platform.systems.blogs.edit')
    ->breadcrumbs(fn (Trail $trail, $article) => $trail
        ->parent('platform.systems.blogs')
        ->push($article->title, route('platform.systems.blogs.edit', $article)));

Route::screen('comments', \App\Orchid\Screens\Comment\CommentListScreen::class)
    ->name('platform.systems.comments')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('comments'), route('platform.systems.comments')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push($role->name, route('platform.systems.roles.edit', $role)));



// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Example Screen'));

Route::screen('/examples/form/fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('/examples/form/advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');
Route::screen('/examples/form/editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('/examples/form/actions', ExampleActionsScreen::class)->name('platform.example.actions');

Route::screen('/examples/layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('/examples/grid', ExampleGridScreen::class)->name('platform.example.grid');
Route::screen('/examples/charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('/examples/cards', ExampleCardsScreen::class)->name('platform.example.cards');

//Route::screen('idea', Idea::class, 'platform.screens.idea');
