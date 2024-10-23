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
        Schema::create('activities_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activities_id')
                ->constrained('activities')
                ->onDelete('cascade');
            $table->foreignId('image_id')
                ->constrained('images')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('activities_images', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::dropIfExists('activities_images');
    }
};
