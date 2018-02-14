<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kosts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nama_pemilik');
            $table->integer('nohp');
            $table->text('alamat');
            $table->integer('harga');
            $table->enum('tipe', ['Pria','Wanita']);
            $table->text('fasilitas');
            $table->enum('jangka_waktu', ['Bulanan','Tahunan']);
            $table->integer('panjang');
            $table->integer('lebar');
            $table->integer('sisa_kamar');
            $table->integer('jumlah_kamar');
            $table->string('images')->nullabel();
            $table->string('deskripsi');
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
        Schema::dropIfExists('kost');
    }
}
