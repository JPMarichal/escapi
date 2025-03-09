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
        Schema::table('versiculos_comentarios', function (Blueprint $table) {
            $table->foreign(['versiculo_id'])->references(['id'])->on('versiculos')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('versiculos_comentarios', function (Blueprint $table) {
            $table->dropForeign('versiculos_comentarios_versiculo_id_foreign');
        });
    }
};
