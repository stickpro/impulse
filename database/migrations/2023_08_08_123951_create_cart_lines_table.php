<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('cart_lines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('cart_id')->constrained('carts');
            $table->morphs('purchasable');
            $table->unsignedInteger('quantity');
            $table->json('meta')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cart_lines');
    }
};
