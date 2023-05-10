<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tax_zone_states', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tax_zone_id')->nullable()->constrained('tax_zones');
            $table->foreignId('state_id')->nullable()->constrained('states');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tax_zone_states');
    }
};
