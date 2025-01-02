<?php

namespace App\Orchid\Screens;

use App\Models\Article;
use App\Models\Customer;
use App\Models\RequestAdvice;
use App\Orchid\Layouts\Examples\ChartBarExample;
use App\Orchid\Layouts\Examples\ChartLineExample;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Components\Cells\Currency;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Repository;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class Dashboard extends Screen
{
    /**
     * Fish text for the table.
     */
    public const TEXT_EXAMPLE = 'Lorem ipsum at sed ad fusce faucibus primis, potenti inceptos ad taciti nisi tristique
    urna etiam, primis ut lacus habitasse malesuada ut. Lectus aptent malesuada mattis ut etiam fusce nec sed viverra,
    semper mattis viverra malesuada quam metus vulputate torquent magna, lobortis nec nostra nibh sollicitudin
    erat in luctus.';

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
         $today_register = Customer::whereDate("created_at",now())->count();
         $yesterday_register = Customer::whereDate("created_at",now()->subDay(1))->count();
        $today_request = RequestAdvice::whereDate("created_at",now())->count();
        $yesterday_request = RequestAdvice::whereDate("created_at",now()->subDay(1))->count();
        $articles  = Article::orderBy("updated_at","DESC")->limit(3)->get();
        $a = $articles->map(function ($item) {
            return new Repository(['id' => $item->id,  'name' => $item->title, 'price' => 10.24, 'created_at' => toJalali($item->created_at)]);
        })->toArray();
        return [
            'articles'   => $a,
            'metrics' => [
                'register'    => ['value' => number_format($today_register), 'diff' =>($today_register-$yesterday_register)/100],
                'request' => ['value' => number_format($today_request), 'diff' =>($today_request-$yesterday_request)/100],
                'appointment'   => ['value' => number_format(0), 'diff' => 0],
                'total'    => number_format(Customer::count()),
            ],
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Dashboard';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'You can get information about how it works';
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
     * @return string[]|\Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
            Layout::metrics([
                'User Registered Today'    => 'metrics.register',
                'Request Advice Today' => 'metrics.request',
                "Doctor 's appointment today" => 'metrics.appointment',
                'Total Users' => 'metrics.total',
            ]),

            Layout::table('table', [
                TD::make('id', 'ID')
                    ->width('100')
                    ->render(fn (Repository $model) => // Please use view('path')
                    "<img src='https://loremflickr.com/500/300?random={$model->get('id')}'
                              alt='sample'
                              class='mw-100 d-block img-fluid rounded-1 w-100'>
                            <span class='small text-muted mt-1 mb-0'># {$model->get('id')}</span>"),

                TD::make('name', 'Name')
                    ->width('450')
                    ->render(fn (Repository $model) => Str::limit($model->get('name'), 200)),

                TD::make('price', 'Price')
                    ->width('100')
                    ->usingComponent(Currency::class, before: '$')
                    ->align(TD::ALIGN_RIGHT),

                TD::make('created_at', 'Created')
                    ->width('100')
                    ->usingComponent(DateTimeSplit::class)
                    ->align(TD::ALIGN_RIGHT),
            ]),

            Layout::modal('exampleModal', Layout::rows([
                Input::make('toast')
                    ->title('Messages to display')
                    ->placeholder('Hello world!')
                    ->help('The entered text will be displayed on the right side as a toast.')
                    ->required(),
            ]))->title('Create your own toast message'),
        ];
    }

    public function showToast(Request $request): void
    {
        Toast::warning($request->get('toast', 'Hello, world! This is a toast message.'));
    }
}
