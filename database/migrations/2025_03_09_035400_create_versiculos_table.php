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
        Schema::create('versiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('capitulo_id')->nullable()->index('versiculos_capitulo_id_foreign');
            $table->unsignedBigInteger('pericopa_id')->nullable()->index('versiculos_pericopa_id_foreign');
            $table->integer('num_versiculo')->nullable();
            $table->text('contenido');
            $table->string('referencia', 50)->nullable();
            $table->string('imagen', 200)->nullable();
            $table->string('pie_imagen', 200)->nullable();
            $table->string('video', 150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versiculos');
    }
};
