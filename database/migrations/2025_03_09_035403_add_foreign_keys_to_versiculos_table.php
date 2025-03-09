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
        Schema::table('versiculos', function (Blueprint $table) {
            $table->foreign(['capitulo_id'])->references(['id'])->on('capitulos')->onUpdate('restrict')->onDelete('set null');
            $table->foreign(['pericopa_id'])->references(['id'])->on('pericopas')->onUpdate('restrict')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('versiculos', function (Blueprint $table) {
            $table->dropForeign('versiculos_capitulo_id_foreign');
            $table->dropForeign('versiculos_pericopa_id_foreign');
        });
    }
};
