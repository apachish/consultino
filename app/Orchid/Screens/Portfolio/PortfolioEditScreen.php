<?php

namespace App\Orchid\Screens\Portfolio;

use App\Models\Portfolio;
use App\Orchid\Layouts\Portfolio\PortfolioEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class PortfolioEditScreen extends Screen
{
    /**
     * @var Portfolio
     */
    public $portfolio;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Portfolio $portfolio): iterable
    {
        return [
            'portfolio'       => $portfolio
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->portfolio->id ? 'Edit Portfolio' : 'Create Portfolio';
    }


    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return $this->portfolio->id ? 'Edit Portfolio' : 'Create Portfolio';
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
            Button::make(__('Save'))
                ->icon('bs.check-circle')
                ->method('save'),
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
            PortfolioEditLayout::class
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Portfolio $portfolio, Request $request)
    {

        $request->validate([
            'portfolio.title' => [
                'required',
            ],
            'portfolio.file' => [
                'required'
            ],
            'portfolio.category' => [
                'required'
            ],
            'portfolio.sort_order' => [
                'required','min:1'
            ],



        ]);

        $data = $request->collect('portfolio');

//        if ($request->file()) {
//            $file = $request->file('value');
//            if(file_exists($slider->value)) {
//                dd("w");
//            }
//            $fileName = time() . '_' . $file->getClientOriginalName();
//            dd($fileName);
//            Storage::disk('images')->put($fileName, $file);
//
//        }
        logger("q",$data->toArray());
        if($portfolio->id)
            $portfolio->update($data->toArray());
        else
            $portfolio->create($data->toArray());



        Toast::info(__('Portfolio was saved.'));

        return redirect()->route('platform.systems.portfolios');
    }
}
