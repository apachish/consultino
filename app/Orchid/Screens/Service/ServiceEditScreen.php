<?php

namespace App\Orchid\Screens\Service;

use App\Models\Faq;
use App\Models\Service;
use App\Orchid\Layouts\Service\ServiceEditLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\ImageManager;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

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
        $imagePath = $this->service->image ?? null;
        return [
            $imagePath ? Layout::columns([
                ServiceEditLayout::class,
                Layout::view('partials.preview', ['imagePath' => $imagePath,'video'=>null]),
            ]) : ServiceEditLayout::class
        ];

    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Service $service, Request $request)
    {
        $hasImage = $service && $service->image;

        $request->validate([
            'service.title' => [
                'required',
            ],

            'service.image' => $hasImage ? ['nullable', 'file', 'mimes:jpg,jpeg,png'] : ['required', 'file', 'mimes:jpg,jpeg,png'],

            'service.sort_order' => [
                'required','min:1'
            ],
            'service.description' => [
                'required'
            ],


        ]);

        $data = $request->collect('service');
        $icon = $request->file('service.icon');

        if ($icon) {
            // بررسی نوع MIME فایل
            $filename = $this->saveImage($icon,50,50);

            $data["icon"] = url("images/services/" . $filename);
        }
        $image = $request->file('service.image');

        if ($image) {
            // بررسی نوع MIME فایل
            $filename = $this->saveImage($image,800,700);

            $data["image"] = url("images/services/" . $filename);
        }
        logger("q",$data->toArray());
        $data['slug'] = slug_seo($data['title']);
        if($service->id)
            $service->update($data->toArray());
        else
            $service = $service->create($data->toArray());

        $currentTagIds = $service->faqs->pluck('id')->toArray();

        if(data_get($data,'faqs')) {
            $faqs = collect();
            foreach (data_get($data, 'faqs') as $row) {
                $faqs->push(Faq::updateOrCreate($row, $row));
            }
            $newTagIds = $faqs->pluck('id')->toArray();

            // پیدا کردن تگ‌هایی که باید اضافه شوند
            $faqsToAttach = array_diff($newTagIds, $currentTagIds);

            // پیدا کردن تگ‌هایی که باید حذف شوند
            $faqsToDetach = array_diff($currentTagIds, $newTagIds);

            // افزودن تگ‌های جدید
            $service->faqs()->attach($faqsToAttach);

            // حذف تگ‌های غیرضروری
            $service->faqs()->detach($faqsToDetach);
        }else{
            $faqsToDetach = array_diff($currentTagIds, []);
            $service->faqs()->detach($faqsToDetach);

        }

        Toast::info(__('Services was saved.'));

        return redirect()->route('platform.systems.services');
    }

    public function saveImage(array|\Illuminate\Http\UploadedFile $image,$width,$heigt): string
    {
        $mimeType = $image->getMimeType();

        $manager = new ImageManager(new Driver());
        $filename = time() . '_service.' . $image->getClientOriginalExtension();

        // مسیر ذخیره‌سازی کامل در دیسک خارجی
        $externalPath = Storage::disk('external_uploads_images')->path("services/" . $filename);

        $img = $manager->read($image);

        $img->scale(width: $width, height: $heigt);

        $img->save($externalPath);
        return $filename;
    }
}
