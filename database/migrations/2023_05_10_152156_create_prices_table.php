<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_group_id')->nullable()->constrained('customer_groups');
            $table->foreignId('currency_id')->nullable()->constrained('currencies');
            $table->morphs('priceable');
            $table->decimal('price','10', 2)->index();
            $table->decimal('compare_price','10', 2)->nullable();
            $table->integer('tier')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
