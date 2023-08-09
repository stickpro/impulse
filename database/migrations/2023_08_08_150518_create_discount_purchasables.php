<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('discount_purchasables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('discount_id')->constrained('discounts')->cascadeOnDelete();
            $table->morphs('purchasable', 'purchasable_idx');
            $table->string('type')->default('condition')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('discount_purchasables');
    }
};
