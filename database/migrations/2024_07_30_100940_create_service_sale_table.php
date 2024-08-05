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
        Schema::create('service_sale', function (Blueprint $table) {
            $table->foreignId('sale_id')->constrained();
            $table->foreignId('service_id')->constrained();
            $table->primary(['sale_id', 'service_id']);
            $table->decimal('quantity', 8, 2);
            $table->decimal('rate', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_sale');
    }
};
