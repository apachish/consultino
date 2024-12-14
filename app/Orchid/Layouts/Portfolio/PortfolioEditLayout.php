<?php

namespace App\Orchid\Layouts\Portfolio;

use App\Models\Portfolio;
use App\Orchid\Fields\DatePicker;
use Morilog\Jalali\CalendarUtils;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;
use Orchid\Support\Color;

class PortfolioEditLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        $shamsiDate = CalendarUtils::strftime('Y/m/d', strtotime('today'));

        return [
            Input::make('portfolio.title')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Title'))
            ->placeholder(__('Name')),

            Relation::make('portfolio.category')
                ->fromModel(Portfolio::class, 'category')
                ->allowAdd(true)
                ->applyScope('group') // اعمال scope گروه‌بندی
                ->title(__('Category')),
            // اضافه کردن فیلد تاریخ به فرم
//            DateTimer::make('date')
//                ->title('تاریخ شمسی')
//                ->format('Y/m/d') // قالب تاریخ شمسی
//                ->help('لطفا تاریخ مورد نظر را وارد کنید.')
//                ->set('id', 'data-picker-p')
//                ->value(CalendarUtils::strftime('Y/m/d', strtotime($this->query->get("portfolio.date"))))

//                ->required(),
            DatePicker::make('selectedDate')
                ->title('انتخاب تاریخ')
                ->help('لطفاً تاریخ مورد نظر را انتخاب کنید.'),
//            Input::make('date')
//                ->type('text')
//                ->title('تاریخ')
//                ->set('id', 'data-picker-p') // اضافه کردن ویژگی id
//                ->placeholder('لطفاً تاریخ را وارد کنید')
//
//                ,



            Quill::make('portfolio.body')
                ->title(__('Body'))
                ->popover('Quill is a free, open source WYSIWYG editor built for the modern web.'),


            Input::make('portfolio.rate')
                ->type('number')
                ->min(0)
                ->max(5)
                ->title(__('Rate'))
                ->placeholder(1),
            Input::make('portfolio.sort_order')
                ->type('number')
                ->max(255)
                ->title(__('sort Order'))
                ->placeholder(1),
            Input::make('portfolio.image')
                              ->type('file')
                              ->title('Upload Image')
                              ->accept('image/*')
                              ->horizontal()
                              ->required(!$this->query->has('slider.image') )
                              ->help('Select an image file. You can upload files in any image format, such as JPG, PNG.')
            ,
            Select::make('portfolio.status')
                ->options([
                    true=> __("Active"),
                    false => __("Deactivate"),
                ])
                ->title(__('Status')),
            Select::make('article.type')
                ->title('Select Type')
                ->options([
                    'image' => 'Image',
                    'iframe' => 'Iframe',
                    'slider' => 'Slider',
                ])
                ->empty('Select a type', '') // گزینه پیش‌فرض
                ->help('Choose whether you want to upload an image or a video.')
            , // شنونده برای تغییر


        ];
    }
}
