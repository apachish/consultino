<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            "telephone" => [
                "title" => "تلفن",
                "value" => "0123456789",
                "type" => "text",
                "status" => true,
            ],
            "email" => [
                "title" => "پست الکترونیک",
                "value" => "contact@example.com",
                "type" => "text",
                "status" => true,

            ],
            "working_hours" => [
                "title" => "ساعت کاری",
                "value" => "  شنبه - چهارشنبه: 9:00 - 19:00 ",
                "type" => "text",
                "status" => true,

            ],
            "logo" => [
                "title" => "لوگو",
                "value" => "/images/logo-r.png",
                "type" => "image",
                "status" => true,

            ],
            "address" => [
                "title" => "آدرس",
                "value" => "خیابان ولیعصر - بالاتر از پارک ساعی - کوچه ساعی دو - پلاک 31",
                "type" => "text",
                "status" => true,

            ],
            "text_contact_us" => [
                "title" => "متن ارتباط با ما",
                "value" => "قدم های ساده به سمت موفقیت",
                "type" => "text",
                "status" => true,

            ],
            "logo_footer" => [
                "title" => "لوگو فوتر",
                "value" => "/images/logo-r.png",
                "type" => "image",
                "status" => true,

            ],
            "description_footer" => [
                "title" => "توضیحات فوتر",
                "value" => "در کادر زیر هر متنی را که دوست دارید تایپ کنید
                 تا ما آن را برایتان نگه داریم و همیشه
                 در دسترس شما قرار دهیم؛ از این طریق می‌توانید
                 متن آزمایشی و متن تستی خودتان را تایپ کرده
                 و در طرح‌هایتان از این متن استفاده کنید...
                 تایپ کنید، به صورت خودکار ذخیره می‌شود.",
                "type" => "text",
                "status" => true,

            ],
            "copyright" => [
                "title" => "کپی رایت",
                "value" => "Copyright ©2018 <a href='https://apachish.ir'>Apachish</a>. All Rights Reserved",
                "type" => "text",
                "status" => true,

            ],
            "social" => [
                "title" => "شبکه اجتماعی",
                "value" => '{"twitter":"https:\/\/twitter.com\/","facebook-f":"https:\/\/facebook.com\/","skype":"myskype","pinterest":"","linkedin":"https:\/\/linkedin.com","instagram":"https:\/\/instagram.com","telegram":"https:\/\/t.me\/www","whatsapp":"https:\/\/wa.me\/qr\/2XVF22JMOJKKO1"}',
                "type" => "json",
                "status" => true,
            ],
            "about_us_title" => [
                "title" => "عنوان درباره ما",
                "value" => "درکنار شما هستیم",
                "type" => "text",
                "status" => true,
            ],
            "about_us_description" => [
                "title" => "متن درباره ما",
                "value" => '<p>
                        مرکز مشاوره ما با تکیه بر تیمی از مشاوران و روانشناسان متخصص، فضایی امن و حرفه&zwnj;ای برای رسیدگی به نیازهای روانشناختی و مشاوره&zwnj;ای شما فراهم کرده است. هدف ما این است که با ارائه خدمات مشاوره فردی، خانواده، تحصیلی و شغلی، به شما در مدیریت چالش&zwnj;ها، بهبود روابط و رشد شخصی کمک کنیم.

                        ما معتقدیم که هر فرد ارزشمند است و شایسته دریافت بهترین حمایت&zwnj;ها برای دستیابی به آرامش و موفقیت در زندگی است. در این مسیر، تلاش ما بر ارائه راهکارهای علمی و کاربردی است تا بتوانیم همراه شما در ساختن فردایی بهتر باشیم.
                    </p><ul class="stylish-list">
                        <li><i class="fa fa-check-square-o"></i>
                            درمانگران متخصص</li>
                        <li><i class="fa fa-check-square-o"></i>  روان&zwnj;سنجی حرفه ای</li>
                        <li><i class="fa fa-check-square-o"></i>
                            مشاوره آنلاین</li>
                        <li><i class="fa fa-check-square-o"></i>
                            نوبت دهی آسان</li>
                        <li><i class="fa fa-check-square-o"></i>
                            مشاوره تخصصی کودک</li>
                    </ul>',
                "type" => "editor",
                "status" => true,
            ],
            "about_us_video" => [
                "title" => "ویدیو درباره ما",
                "value" =>"https://www.youtube.com/watch?v=06kJXhOZhLU",
                "type" => "text",
                "status" => true,
            ],
            "about_us_image" => [
                "title" => "عکس ویدیو درباره ما",
                "value" => url("/images/def.webp"),
                "type" => "file",
                "status" => true,
            ],

            "about_us_video_title" => [
                "title" => "عنوان ویدیو",
                "value" => "با ما همراه شوید",
                "type" => "text",
                "status" => true,
            ],
            "about_us_video_description" => [
                "title" => "توضیحات ویدیو",
                "value" => "مرکز مشاوره ما با تکیه بر تیمی از مشاوران و روانشناسان متخصص، فضایی امن و حرفه‌ای برای رسیدگی به نیازهای روانشناختی و مشاوره‌ای شما فراهم کرده است. ",
                "type" => "text",
                "status" => true,
            ],
            "location" => [
                "title" => "موقعیت جغرافیای",
                "value" => '<iframe src="https://balad.ir/embed?p=5rxnaLYout45NV" title="مشاهده «دکتر اسماعیل زارع» روی نقشه بلد" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
                "type" => "text",
                "status" => true,
            ],
        ];
        foreach ($settings as $key => $setting) {
            Setting::updateOrCreate(["key" => $key], $setting);
        }

    }
}
