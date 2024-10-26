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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('eslogan')->nullable();
            $table->text('introduction')->nullable();
            $table->text('history')->nullable();
            $table->text('extra')->nullable();
            $table->text('url_img')->default('img/prueba.jpg');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::dropIfExists('sites');
    }
};
