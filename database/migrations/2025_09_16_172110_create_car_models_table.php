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
        Schema::create('car_models', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('engine_fuel_type', ['gasoline', 'diesel', 'hybrid', 'electric']);
            $table->enum('transmission', ['AT', 'MT']);

            // Внешние ключи
            $table
                ->foreignId('car_brand_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table
                ->foreignId('car_category_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_models');
    }
};
