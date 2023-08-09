<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('cart_line_discount', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_line_id')->constrained('carts')->cascadeOnDelete();
            $table->foreignId('discount_id')->constrained('discounts')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cart_line_discount');
    }
};
