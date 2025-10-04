<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_price', 10, 2);
            $table->decimal('price_per_day', 8, 2);
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table
                ->enum('status', ['pending', 'confirmed', 'active', 'completed', 'cancelled'])
                ->default('pending');

            $table
                ->foreignId('user_id')
                ->constrained();
            $table
                ->foreignId('car_model_id')
                ->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
