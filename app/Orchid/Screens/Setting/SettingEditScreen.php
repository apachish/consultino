<?php

namespace App\Orchid\Screens\Setting;

use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use Orchid\Screen\Actions\Button;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class SettingEditScreen extends Screen
{
    /**
     * @var Setting
     */
    public $setting;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Setting $setting): iterable
    {
        return [
            'setting'       => $setting
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->setting ? 'Edit Setting' : 'Create Setting';
    }


    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Edit site constants';
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
        $type = $this->setting && $this->setting->type ? $this->setting->type : 'text';
        return [
            Layout::rows([
                Input::make('setting.title')
                    ->type('text')
                    ->max(255)
                    ->required()
                    ->title(__('Title'))
                    ->placeholder(__('Name')),
                $this->selectInput($type),
                Select::make('setting.status')
                    ->options([
                        true=> __("active"),
                        false => __("Deactivate"),
                    ])
                    ->title('Status')

            ]),
//            Layout::block(SettingEditLayout::class)
//                ->title(__('Setting Information'))
//                ->description(__('Edit Setting information.'))
//                ->commands(
//                    Button::make(__('Save'))
//                        ->type(Color::DARK)
//                        ->icon('bs.check-circle')
//                        ->canSee($this->setting?true:false)
//                        ->method('save')
//                ),
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

    public function selectInput($type)
    {
        switch ($type) {
            case 'text':
               return Input::make('setting.value')
                    ->type('text')
                    ->required()
                    ->title(__('Value'))
                    ->placeholder(__('Value'));
               break;
               case 'image':
               return Picture::make('setting.value')
                    ->title('Upload Image')
                    ->accept('image/*')
//                    ->multiple()
                    ->help('Select an image file. You can upload files in any image format, such as JPG, PNG, or GIF.')
                   ;
        }
    }

}
