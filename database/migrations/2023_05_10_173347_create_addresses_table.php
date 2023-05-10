<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->constrained('customers');
            $table->foreignId('country_id')->nullable()->constrained('countries');
            $table->string('title')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company_name')->nullable();
            $table->string('line_one');
            $table->string('line_two')->nullable();
            $table->string('line_three')->nullable();
            $table->string('city');
            $table->string('state')->nullable();
            $table->string('postcode')->nullable();
            $table->string('delivery_instructions')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->json('meta')->nullable();
            $table->boolean('shipping_default')->default(false);
            $table->boolean('billing_default')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
