<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
//            id INT AUTO_INCREMENT PRIMARY KEY,        -- شناسه یکتا برای هر اسلاید
//            title VARCHAR(255) NOT NULL,              -- عنوان اصلی اسلاید
//            subtitle VARCHAR(255),                    -- زیرعنوان یا توضیحات اضافی
//            description TEXT,                         -- متن توضیحی
//            image_url VARCHAR(255) NOT NULL,          -- مسیر یا لینک تصویر
//            button1_text VARCHAR(100),                -- متن دکمه اول
//            button1_link VARCHAR(255),                -- لینک دکمه اول
//            button2_text VARCHAR(100),                -- متن دکمه دوم
//            button2_link VARCHAR(255),                -- لینک دکمه دوم
//            is_active BOOLEAN DEFAULT TRUE,           -- وضعیت فعال/غیرفعال بودن اسلاید
//            sort_order INT DEFAULT 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
