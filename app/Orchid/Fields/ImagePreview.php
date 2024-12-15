<?php
declare(strict_types=1);

namespace App\Orchid\Fields;

use Orchid\Screen\Field;

/**
 * Class ImagePreview.
 * @method DatePicker name(string $value = null)

 *
 **/
class ImagePreview extends Field
{
    protected $view = 'fields.image-preview';
    /**
     * تنظیم مقدار پیش‌فرض
     */
    protected $attributes = [

    ];

    protected $inlineAttributes = [
        'value',
    ];


}
