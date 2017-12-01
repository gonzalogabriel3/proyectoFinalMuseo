<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBienesDescriptoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bienes_descriptores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bienes_id')->unsigned();
            $table->foreign('bienes_id')->references('id')->on('bienes')->onDelete('cascade');
            $table->integer('descriptores_id')->unsigned();
            $table->foreign('descriptores_id')->references('id')->on('descriptores')->onDelete('cascade');
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
        Schema::dropIfExists('bienes_descriptores');
    }
}
