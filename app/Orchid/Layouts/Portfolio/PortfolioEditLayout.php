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

        return [
            Input::make('portfolio.title')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Title'))
            ->placeholder(__('Name')),
            Select::make('portfolio.category') // نام فیلد در دیتابیس
            ->fromQuery(
                Portfolio::select('category')->distinct(), // کوئری معتبر
                'category' // نام ستون برای نمایش به‌عنوان لیبل
            )
                ->title(__('Category'))
                ->allowAdd(),
            Input::make('portfolio.sort_order')
                ->type('number')
                ->max(255)
                ->required()
                ->title(__('sort Order'))
                ->placeholder(1),
            Input::make('portfolio.image')
                              ->type('file')
                              ->title('Upload Image')
                              ->accept('image/*')
                              ->required(!$this->query->has('portfolio.image') )
                              ->help('Select an image file. You can upload files in any image format, such as JPG, PNG.')
            ,
            Select::make('portfolio.status')
                ->options([
                    true=> __("Active"),
                    false => __("Deactivate"),
                ])
                ->title(__('Status')),
            /*
             * parameters
             */
            DatePicker::make('selectedDate')
                ->setWithTime(false)
                ->title('تاریخ')
                ->name('parameter.date.value')
                ->showFormat("jYYYY/jMM/jDD")
            ->required(false)
            ->defaultDate(date('Y-m-d H:i:s'))
            ->setNullInput()
                ->ignoreWire()
                ->withTimeSeconds(false),
            Quill::make('parameter.body.value')
                ->title(__('Body')),
            Input::make('parameter.rate.value')
                ->type('number')
                ->min(0)
                ->max(5)
                ->title(__('Rate'))
                ->placeholder(1),



            Select::make('subtract.type')
                ->title('Select Type')
                ->options([
                    'image' => 'Image',
                    'iframe' => 'Iframe',
                    'slider' => 'Slider',
                ])
                ->required()
                ->empty(__('Select a type'), '') // گزینه پیش‌فرض
                ->help('Choose whether you want to upload an image or a video link.')
            , // شنونده برای تغییر


        ];
    }
}
