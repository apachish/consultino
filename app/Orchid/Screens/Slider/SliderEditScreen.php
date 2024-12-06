<?php

namespace App\Orchid\Screens\Slider;

use App\Models\Setting;
use App\Models\Slider;
use App\Orchid\Layouts\Slider\SliderEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class SliderEditScreen extends Screen
{
    /**
     * @var Slider
     */
    public $slider;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Slider $slider): iterable
    {
        return [
            'slider'       => $slider
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->slider ? 'Edit Slider' : 'Create Slider';
    }


    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return $this->slider ? 'Edit Slider' : 'Create Slider';
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
            Layout::rows([
                Input::make('slider.title')
                    ->type('text')
                    ->max(255)
                    ->required()
                    ->title(__('Title'))
                    ->placeholder(__('Name')),
                Input::make('slider.key.subtitle')
                    ->type('text')
                    ->max(255)
                    ->required()
                    ->title(__('Subtitle'))
                    ->placeholder(__('Subtitle')),
                Input::make('slider.key.description')
                    ->type('text')
                    ->max(255)
                    ->required()
                    ->title(__('Title'))
                    ->placeholder(__('Name')),
                Input::make('slider.key.button1_text')
                    ->type('text')
                    ->max(255)
                    ->required()
                    ->title(__('Title'))
                    ->placeholder(__('Name')),
                Input::make('slider.key.button1_link')
                    ->type('text')
                    ->max(255)
                    ->required()
                    ->title(__('Title'))
                    ->placeholder(__('Name')),
                Input::make('slider.key.button2_text')
                    ->type('text')
                    ->max(255)
                    ->required()
                    ->title(__('Title'))
                    ->placeholder(__('Name')),
                Input::make('slider.key.button2_link')
                    ->type('text')
                    ->max(255)
                    ->required()
                    ->title(__('Title'))
                    ->placeholder(__('Name')),
                Picture::make('slider.image')
                    ->title('Upload Image')
                    ->accept('image/*')
//                    ->multiple()
                    ->help('Select an image file. You can upload files in any image format, such as JPG, PNG, or GIF.'),
                Select::make('slider.status')
                    ->options([
                        true=> __("Active"),
                        false => __("Deactivate"),
                    ])
                    ->title('Status')

            ]),
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Setting $setting, Request $request)
    {

        $request->validate([
            'setting.title' => [
                'required',
            ],
            'setting.value' => [
                'required',
            ],
        ]);

        $data = $request->collect('setting');
//        if ($request->file()) {
//            $file = $request->file('value');
//            if(file_exists($setting->value)) {
//                dd("w");
//            }
//            $fileName = time() . '_' . $file->getClientOriginalName();
//            dd($fileName);
//            Storage::disk('images')->put($fileName, $file);
//
//        }
        $setting->update($data->toArray());


        Toast::info(__('Setting was saved.'));

        return redirect()->route('platform.systems.settings');
    }

}
