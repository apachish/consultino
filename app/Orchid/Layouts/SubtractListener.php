<?php

namespace App\Orchid\Layouts;

use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Listener;
use Orchid\Screen\Repository;
use Orchid\Support\Facades\Layout;

class SubtractListener extends Listener
{
    /**
     * List of field names for which values will be listened.
     *
     * @var string[]
     */
    protected $targets = [
        'article.type',
    ];

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    protected function layouts(): iterable
    {
        return [
            Layout::rows([
                Input::make('minuend')
                    ->title('First argument')
                    ->type('number'),

                Input::make('subtrahend')
                    ->title('Second argument')
                    ->type('number'),
            ]),
        ];
    }

    /**
     * Update state
     *
     * @param \Orchid\Screen\Repository $repository
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Orchid\Screen\Repository
     */
    public function handle(Repository $repository, Request $request): Repository
    {
        logger("Ww",[$request->all()]);
        $minuend = $request->input('article.type');

        $subtrahend = $request->input('subtrahend');

        return $repository
            ->set('minuend', $minuend)
            ->set('subtrahend', $subtrahend)
            ->set('result', $minuend - $subtrahend);
    }
}
