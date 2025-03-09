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
        Schema::table('pericopas', function (Blueprint $table) {
            $table->foreign(['capitulo_id'])->references(['id'])->on('capitulos')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pericopas', function (Blueprint $table) {
            $table->dropForeign('pericopas_capitulo_id_foreign');
        });
    }
};
