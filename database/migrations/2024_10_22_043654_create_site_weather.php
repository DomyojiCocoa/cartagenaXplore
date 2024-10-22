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
        Schema::create('site_weather', function (Blueprint $table) {
            $table->foreignId('site_id')->constrained('sites')->onDelete('cascade');
            $table->foreignId('weather_id')->constrained('weather_conditions')->onDelete('cascade');
            $table->primary(['site_id', 'weather_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_weather');
    }
};
