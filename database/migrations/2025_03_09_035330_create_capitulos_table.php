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
        Schema::create('capitulos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('featured_image')->nullable();
            $table->text('keywords')->nullable();
            $table->unsignedBigInteger('libro_id')->nullable()->index('capitulos_libro_id_foreign');
            $table->unsignedBigInteger('parte_id')->nullable()->index('capitulos_parte_id_foreign');
            $table->integer('num_capitulo')->nullable();
            $table->string('referencia', 100)->nullable();
            $table->string('abreviatura', 50)->nullable();
            $table->integer('num_versiculos')->nullable();
            $table->string('titulo_capitulo', 100)->nullable();
            $table->string('url_oficial', 150)->nullable();
            $table->string('url_audio', 150)->nullable();
            $table->integer('id_periodo')->nullable();
            $table->string('sumario', 500)->nullable();
            $table->text('resumen')->nullable();
            $table->string('ajuste_pericopas', 100)->nullable();
            $table->string('secuencia', 500)->nullable();
            $table->string('url_bc')->nullable();
            $table->string('url_bcdev')->nullable();
            $table->text('introduccion')->nullable();
            $table->text('conclusion')->nullable();
            $table->integer('estado_publicacion')->default(0)->comment('Estado con respecto al plan editorial. Valores posibles= 0 - Sin comenzar, 1 - En proceso, 2 - En revisión, 3 - Listo para impresión.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capitulos');
    }
};
