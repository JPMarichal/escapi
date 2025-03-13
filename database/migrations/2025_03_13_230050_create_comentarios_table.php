<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->morphs('comentable'); // Crea comentable_id y comentable_type automáticamente
            $table->string('titulo')->nullable();
            $table->text('comentario');
            $table->integer('orden')->nullable();
            $table->string('url_imagen', 200)->nullable();
            $table->string('url_video', 200)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};

