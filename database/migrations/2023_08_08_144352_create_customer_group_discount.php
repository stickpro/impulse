<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('customer_group_discount', function (Blueprint $table) {
            $table->id();

            $table->foreignId('discount_id')->constrained('discounts');
            $table->foreignId('customer_group_id')->constrained('customer_groups');
            $table->boolean('enabled')->default(false)->index();
            $table->timestamp('starts_at')->nullable()->index();
            $table->timestamp('ends_at')->nullable()->index();
            $table->boolean('visible')->default(true)->index();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_group_discount');
    }
};
