<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $columns = ['length', 'width', 'height', 'weight', 'volume'];

            $table->id();
            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('tax_class_id')->constrained('tax_classes');
            $table->json('attribute_data')->nullable();
            $table->string('tax_ref')->index()->nullable();
            $table->string('unit_quantity')->unsigned()->index()->default(1);
            $table->string('sku')->nullable()->index();
            $table->string('gtin')->nullable()->index();
            $table->string('mpn')->nullable()->index();
            $table->string('ean')->nullable()->index();
            foreach ($columns as $column) {
                $table->decimal("{$column}_value", 10, 4)->default(0)->nullable()->index();
                $table->string("{$column}_unit")->default('mm')->nullable();
            }
            $table->string('shippable');
            $table->integer('stock');
            $table->integer('backorder');
            $table->string('purchasable');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
