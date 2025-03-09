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
        Schema::table('capitulos', function (Blueprint $table) {
            $table->foreign(['libro_id'])->references(['id'])->on('libros')->onUpdate('restrict')->onDelete('set null');
            $table->foreign(['parte_id'])->references(['id'])->on('partes')->onUpdate('restrict')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('capitulos', function (Blueprint $table) {
            $table->dropForeign('capitulos_libro_id_foreign');
            $table->dropForeign('capitulos_parte_id_foreign');
        });
    }
};
