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
        Schema::table('libros', function (Blueprint $table) {
            $table->foreign(['division_id'])->references(['id'])->on('divisiones')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign(['volumen_id'])->references(['id'])->on('volumenes')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('libros', function (Blueprint $table) {
            $table->dropForeign('libros_division_id_foreign');
            $table->dropForeign('libros_volumen_id_foreign');
        });
    }
};
