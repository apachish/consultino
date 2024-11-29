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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('mobile',15)->nullable()->unique()->index();
            $table->string('email',100)->nullable()->unique()->index();
            $table->string('fullName',80)->nullable();
            $table->boolean('gender')->default(false);
            $table->string('national_code',10)->nullable();
            $table->string('address')->nullable();
            $table->string('password');
            $table->boolean('is_verified');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
