<?php
declare(strict_types=1);

namespace App\Orchid\Fields;

use Orchid\Screen\Field;

/**
 * Class DatePicker.
 * @method DatePicker title(string $value = null)
 * @method DatePicker placeholder(string $value = null)
 * @method DatePicker setWithTime(bool $value = null)
 * @method DatePicker name(string $value = null)
 * @method DatePicker value(string $value = null)
 * @method DatePicker showFormat(string $value = null)
 * @method DatePicker defaultDate(\DateTime $value = null)
 * @method DatePicker required(bool $value = true)
 * @method DatePicker setNullInput(bool $value = true)
 * @method DatePicker ignoreWire(bool $value = true)
 * @method DatePicker withTimeSeconds(bool $value = true)
 *
 **/
class DatePicker extends Field
{
    protected $view = 'fields.datepicker';
    /**
     * تنظیم مقدار پیش‌فرض
     */
    protected $attributes = [

    ];

    protected $inlineAttributes = [
        'name',
        'value',
        'placeholder',
        'showFormat',
        'title',
        'setWithTime',
        'required',
        'defaultDate',
        "setNullInput",
        "ignoreWire",
        "withTimeSeconds",

    ];


}
