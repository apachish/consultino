<?php

namespace App\Orchid\Screens\Expertise;

use App\Models\Expertise;
use App\Models\Service;
use App\Orchid\Layouts\Expertise\ExpertiseEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class ExpertiseEditScreen extends Screen
{
    /**
     * @var Expertise
     */
    public $expertise;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Expertise $expertise): iterable
    {
        return [
            'expertise'       => $expertise
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->expertise->id ? 'Edit Service' : 'Create Service';
    }


    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return $this->expertise->id ? 'Edit Service' : 'Create Service';
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
             ExpertiseEditLayout::class
        ];

    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Service $expertise, Request $request)
    {
        $hasImage = $expertise && $expertise->image;

        $request->validate([
            'expertise.name' => [
                'required',
            ],
        ]);

        $data = $request->collect('expertise');


        if($expertise->id)
            $expertise->update($data->toArray());
        else
            $expertise = $expertise->create($data->toArray());

        Toast::info(__('Expertise was saved.'));

        return redirect()->route('platform.systems.expertise');
    }
}
