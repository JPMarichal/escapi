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
        Schema::create('libros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('featured_image')->nullable();
            $table->text('keywords')->nullable();
            $table->unsignedBigInteger('volumen_id')->nullable()->index('libros_volumen_id_foreign');
            $table->unsignedBigInteger('division_id')->nullable()->index('libros_division_id_foreign');
            $table->string('nombre', 30)->nullable();
            $table->string('abreviatura', 30)->nullable();
            $table->string('abreviatura_online', 30)->nullable();
            $table->integer('num_capitulos')->nullable();
            $table->string('palabra_clave', 100)->nullable();
            $table->string('concepto_principal', 150)->nullable();
            $table->string('autor', 100)->nullable();
            $table->text('autor_why')->nullable();
            $table->string('f_redaccion', 100)->nullable();
            $table->text('fecha_redaccion_why')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('introduccion')->nullable();
            $table->text('temas_estructura')->nullable();
            $table->string('sumario', 400)->nullable();
            $table->string('url', 150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
