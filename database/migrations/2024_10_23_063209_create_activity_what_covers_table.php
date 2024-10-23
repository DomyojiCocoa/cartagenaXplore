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
        Schema::create('activity_what_covers', function (Blueprint $table) {
            $table->id();
            $table->text('info');
            $table->foreignId('activity_id')
                ->constrained('activities')
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
        Schema::table('activity_what_covers', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::dropIfExists('activity_what_covers');
    }
};
