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
        Schema::create('forumhilang', function (Blueprint $table) {
            $table->id();
            $table->string('barang');
            $table->string('pemilik');
            $table->string('telepon');
            $table->string('lokasi');
            $table->string('deskripsi');
            $table->string('kategori');
            $table->string('gambar');
        
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
        Schema::dropIfExists('forumhilang');
    }
};
