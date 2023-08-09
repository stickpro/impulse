<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('media_variant', function (Blueprint $table) {
            $table->id();
            $table->foreignId('media_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_variant_id')->constrained('product_variants')->onDelete('cascade');
            $table->boolean('primary')->default(false)->index();
            $table->smallInteger('position')->default(1)->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('media_variant');
    }
};
