<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKostImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kost_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kost_id')->unsigned();
            $table->string('filename');
            $table->timestamps();

            $table->foreign('kost_id')->references('id')->on('kosts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kost_images');
    }
}
