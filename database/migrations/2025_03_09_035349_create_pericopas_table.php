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
        Schema::create('pericopas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('featured_image')->nullable();
            $table->text('keywords')->nullable();
            $table->unsignedBigInteger('capitulo_id')->index('pericopas_capitulo_id_foreign');
            $table->string('titulo', 100)->nullable();
            $table->integer('versiculo_inicial')->nullable();
            $table->integer('versiculo_final')->nullable();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pericopas');
    }
};
