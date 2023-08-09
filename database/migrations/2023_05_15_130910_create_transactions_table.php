<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_transaction_id')->after('id')
                ->nullable()
                ->constrained('transactions');
            $table->foreignId('order_id')->constrained('orders');
            $table->boolean('success')->index();
            $table->enum('type', ['refund', 'intent', 'capture'])->index()->default('capture');
            $table->boolean('refund')->default(0)->index();
            $table->string('driver');
            $table->decimal('amount', 10, 4)->index();
            $table->string('reference')->index();
            $table->string('status');
            $table->string('notes')->nullable();
            $table->string('card_type', 25)->index();
            $table->string('last_four', 4)->nullable();
            $table->json('meta')->nullable();
            $table->dateTime('captured_at')->nullable()->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
