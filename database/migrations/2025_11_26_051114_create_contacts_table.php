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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
             $table->string('full_name');              // tên người gửi
             $table->string('phone_number')->nullable(); // số điện thoại
             $table->string('email')->nullable(); // email người gửi

             $table->string('message'); // nội dung liên hệ

             $table->boolean('is_replied')->default(false); // đã trả lời hay chưa

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
