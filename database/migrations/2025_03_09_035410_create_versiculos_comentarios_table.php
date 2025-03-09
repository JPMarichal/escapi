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
        Schema::create('versiculos_comentarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('versiculo_id')->index('versiculos_comentarios_versiculo_id_foreign');
            $table->string('titulo', 100)->nullable();
            $table->text('comentario')->nullable();
            $table->integer('orden')->nullable();
            $table->string('url_imagen', 200)->nullable();
            $table->string('url_video', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versiculos_comentarios');
    }
};
