<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('customer_id')->nullable()->constrained('customers');
            $table->string('merged_id');
            $table->string('currency_id');
            $table->string('order_id');
            $table->string('coupon_code')->nullable();
            $table->dateTime('completed_at')->nullable();
            $table->string('meta');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
