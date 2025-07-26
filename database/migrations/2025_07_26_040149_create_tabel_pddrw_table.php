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
        Schema::create('tabel_pddrw', function (Blueprint $table) {
            $table->id();
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('lakilaki');
            $table->integer('perempuan');
            $table->integer('jumlah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_pddrw');
    }
};
