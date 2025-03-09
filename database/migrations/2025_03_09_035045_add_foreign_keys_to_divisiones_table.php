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
        Schema::table('divisiones', function (Blueprint $table) {
            $table->foreign(['volumen_id'])->references(['id'])->on('volumenes')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('divisiones', function (Blueprint $table) {
            $table->dropForeign('divisiones_volumen_id_foreign');
        });
    }
};
