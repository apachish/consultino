<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * id INT AUTO_INCREMENT PRIMARY KEY,
     * date_id INT NOT NULL,
     * start_time TIME NOT NULL,
     * end_time TIME NOT NULL,
     * is_available BOOLEAN DEFAULT TRUE, -- آیا این زمان رزرو نشده است؟
     * created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
     * updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
     * FOREIGN KEY (date_id) REFERENCES dates(id) ON DELETE CASCADE
     */
    public function up(): void
    {
        Schema::create('time_slots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('date_id');
            $table->foreign('date_id')
                ->references('id')
                ->on('doctor_dates')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->time('start_time');
            $table->time('end_time');
            $table->boolean("is_available");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_slots');
    }
};
