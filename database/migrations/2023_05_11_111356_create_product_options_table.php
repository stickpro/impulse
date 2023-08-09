<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('product_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('name');
            $table->json('label')->nullable();
            $table->string('handle')->unique()->nullable();
            $table->integer('position')->default(0)->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_options');
    }
};
