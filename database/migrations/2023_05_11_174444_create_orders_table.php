<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('customer_id')->nullable()->constrained('customers');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('cart_id')->nullable()->constrained('carts')->nullOnDelete();
            $table->boolean('new_customer')->default(false)->index();
            $table->string('status')->index();
            $table->string('reference')->nullable()->unique();
            $table->string('customer_reference')->nullable();
            $table->decimal('sub_total', 10, 4)->index();
            $table->json('discount_breakdown')->after('sub_total');
            $table->decimal('discount_total', 10, 4)->index();
            $table->json('shipping_breakdown')->nullable();
            $table->decimal('shipping_total', 10, 4)->index();
            $table->json('tax_breakdown');
            $table->decimal('tax_total', 10, 4)->index();
            $table->decimal('total', 10,4)->index();
            $table->text('notes')->nullable();
            $table->string('currency_code', 3);
            $table->string('compare_currency_code', 3)->nullable();
            $table->decimal('exchange_rate', 10, 4)->default(1);
            $table->dateTime('placed_at')->nullable()->index();
            $table->json('meta')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
