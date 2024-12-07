<?php

namespace App\Orchid\Screens\Link;

use App\Models\Link;
use App\Orchid\Layouts\Link\LinkEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class LinkEditScreen extends Screen
{
    /**
     * @var Link
     */
    public $link;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Link $link): iterable
    {
        return [
            'link'       => $link
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->link->id ? 'Edit Link' : 'Create Link';
    }


    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return $this->link->id ? 'Edit Link' : 'Create Link';
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
            LinkEditLayout::class
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Link $link, Request $request)
    {

        $request->validate([
            'link.title' => [
                'required',
            ],
            'link.image' => [
                'required'
            ],
            'link.sort_order' => [
                'required','min:1'
            ],
            'link.url' => [
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
        if($link->id)
            $link->update($data->toArray());
        else
            $link->create($data->toArray());



        Toast::info(__('Slider was saved.'));

        return redirect()->route('platform.systems.links');
    }
}
