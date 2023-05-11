<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('product_option_value_product_variant', function (Blueprint $table) {
            $table->id();
            $table->foreignId('value_id')->constrained('product_option_values');
            $table->foreignId('variant_id')->constrained('product_variants');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_option_value_product_variants');
    }
};
