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
        Schema::create('slider_parameters', function (Blueprint $table) {
            $table->id();
            $table->enum('key',[
                "subtitle",
                "description",
                "button1_text",
                "button1_link",
                "button2_text",
                "button2_link",
            ]);
            $table->string('value');
            $table->foreign('slide_id')->references('id')->on('sliders')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slider_parameters');
    }
};
