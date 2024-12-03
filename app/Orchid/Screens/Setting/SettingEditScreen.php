<?php

namespace App\Orchid\Screens\Setting;

use App\Models\Setting;
use App\Orchid\Layouts\Setting\SettingEditLayout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Attach;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;

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
        return [
            Layout::rows([
                Input::make('setting.title')
                    ->type('text')
                    ->max(255)
                    ->required()
                    ->title(__('Title'))
                    ->placeholder(__('Name')),
                $this->selectInput($this->setting->type),
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
               return Attach::make('file')
                    ->title('Upload Image')
                    ->accept('image/*')
//                    ->multiple()
                    ->help('Select an image file. You can upload files in any image format, such as JPG, PNG, or GIF.')
                    ->horizontal();
        }
    }
}
