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
        Schema::create('request_advice', function (Blueprint $table) {
            $table->id();
            $table->string("full_name");
            $table->string("mobile");
            $table->string("date");
            $table->unsignedBigInteger('expertise_id');
            $table->foreign('expertise_id')
                ->references('id')
                ->on('expertises')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string("status")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_advice');
    }
};
