<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('order_lines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('order_id')->constrained('orders');
            $table->morphs('purchasable');
            $table->string('type')->index();
            $table->string('description');
            $table->string('option')->nullable();
            $table->string('identifier')->index();
            $table->decimal('unit_price', 10, 4);
            $table->smallInteger('unit_quantity')->default(1)->unsigned()->index();
            $table->unsignedInteger('quantity');
            $table->decimal('sub_total');
            $table->decimal('discount_total')->default(0)->unsigned();
            $table->json('tax_breakdown');
            $table->decimal('tax_total', 10, 4);
            $table->decimal('total', 10, 4);
            $table->text('notes')->nullable();
            $table->json('meta')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_lines');
    }
};
