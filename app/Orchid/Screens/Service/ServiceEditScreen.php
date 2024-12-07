<?php

namespace App\Orchid\Screens\Service;

use App\Models\Service;
use App\Orchid\Layouts\Service\ServiceEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;

class ServiceEditScreen extends Screen
{
    /**
     * @var Service
     */
    public $service;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Service $service): iterable
    {
        return [
            'service'       => $service
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->service->id ? 'Edit Service' : 'Create Service';
    }


    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return $this->service->id ? 'Edit Service' : 'Create Service';
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
            ServiceEditLayout::class
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Service $service, Request $request)
    {

        $request->validate([
            'service.title' => [
                'required',
            ],
            'service.image' => [
                'required'
            ],
            'service.sort_order' => [
                'required','min:1'
            ],
            'service.url' => [
                'required','url:http,https'
            ],


        ]);

        $data = $request->collect('link');
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
        if($service->id)
            $service->update($data->toArray());
        else
            $service->create($data->toArray());



        Toast::info(__('Slider was saved.'));

        return redirect()->route('platform.systems.links');
    }
}
