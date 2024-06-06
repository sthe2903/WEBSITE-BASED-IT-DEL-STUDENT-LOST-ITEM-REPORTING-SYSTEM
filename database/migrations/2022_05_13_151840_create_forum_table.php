<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum', function (Blueprint $table) {
            $table->id();
            $table->string('barang');
            $table->string('penemu');
            $table->string('telepon');
            $table->string('lokasi');
            $table->string('deskripsi');
            $table->string('kategori');
            $table->string('gambar');
            $table->string('status');
        
            // $table->enum('status',['new','taken'])->dafault('new');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forum');
    }
};
