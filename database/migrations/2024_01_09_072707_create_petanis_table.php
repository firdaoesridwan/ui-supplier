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
        Schema::create('petanis', function (Blueprint $table) {
            $table->id();
            $table->string("nama", 100);
            $table->string("alamat", 150);
            $table->string("no_hp", 20);
            $table->float("luas_lahan", 10);
            $table->string('varietas_sawit');
            $table->string('pupuk');
            $table->year('tahun_sawit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petanis');
    }
};
