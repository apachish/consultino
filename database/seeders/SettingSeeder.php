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
            "telephone"=>[
                "title"=>"تلفن",
                "value"=>"0123456789",
                "type"=>"text"
            ],
            "email"=>[
                "title"=>"پست الکترونیک",
                "value"=>"contact@example.com",
                "type"=>"text"
            ],
            "working_hours"=>[
                "title"=>"ساعت کاری",
                "value"=>"  شنبه - چهارشنبه: 9:00 - 19:00 ",
                "type"=>"text"
            ],
            "logo"=>[
                "title"=>"لوگو",
                "value"=>"/images/logo-s.png",
                "type"=>"image"
            ],
            "address"=>[
                "title"=>"آدرس",
                "value"=>"خیابان ولیعصر - بالاتر از پارک ساعی - کوچه ساعی دو - پلاک 31",
                "type"=>"text"
            ],
            "text_contact_us"=>[
                "title"=>"متن ارتباط با ما",
                "value"=>"قدم های ساده به سمت موفقیت",
                "type"=>"text"
            ],
            "logo_footer"=>[
                "title"=>"لوگو فوتر",
                "value"=>"/images/logo-r.png",
                "type"=>"image"
            ],
            "description_footer"=>[
                "title"=>"توضیحات فوتر",
                "value"=>"در کادر زیر هر متنی را که دوست دارید تایپ کنید
                 تا ما آن را برایتان نگه داریم و همیشه
                 در دسترس شما قرار دهیم؛ از این طریق می‌توانید
                 متن آزمایشی و متن تستی خودتان را تایپ کرده
                 و در طرح‌هایتان از این متن استفاده کنید...
                 تایپ کنید، به صورت خودکار ذخیره می‌شود.",
                "type"=>"text"
            ],
            "copyright"=>[
                "title"=>"کپی رایت",
                "value"=>"Copyright ©2018 Apachish. All Rights Reserved",
                "type"=>"text"
            ],
        ];
        foreach($settings as $key=>$setting){
            logger("2",$setting);
            Setting::updateOrCreate(["key"=>$key],$setting);
        }

    }
}
