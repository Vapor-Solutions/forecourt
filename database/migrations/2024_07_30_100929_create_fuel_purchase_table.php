<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fuel_purchase', function (Blueprint $table) {
            $table->foreignId('purchase_id')->constrained();
            $table->foreignId('fuel_id')->constrained();
            $table->decimal('amount_expected', 8, 2);
            $table->decimal('amount_received',8, 2);
            $table->decimal('unit_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_purchase');
    }
};
