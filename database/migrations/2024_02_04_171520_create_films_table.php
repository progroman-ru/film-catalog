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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200)->comment('Название фильма');
            $table->smallInteger('duration')->comment('Продолжительность в минутах');
            $table->smallInteger('year')->comment('Год выпуска');
            $table->string('genre', 100)->comment('Жанр');
            $table->string('director')->comment('Режиссер');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
