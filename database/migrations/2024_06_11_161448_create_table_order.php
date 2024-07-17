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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('user_fullname');
            $table->string('user_email');
            $table->string('user_phone');
            $table->string('user_address');
            $table->enum('status', ['pending', 'prepare', 'shiping', 'success', 'cancle'])->default('pending');
            $table->integer('totalPrice')->default(0);
            $table->integer('totalQuantity')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
