<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBienesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bienes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('codigo');
            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->string('autor');
            $table->string('nombre');
            $table->string('lugar');
            $table->date('fecha');
            $table->integer('tomo')->nullable();
            $table->integer('folio')->nullable();
            $table->integer('paginas')->nullable();
            $table->integer('legajo')->nullable();
            $table->integer('material_id')->unsigned();
            $table->foreign('material_id')->references('id')->on('materiales');
            $table->string('completo');
            $table->string('procedencia');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->string('foto');
            $table->string('fotografo');
            $table->text('descripcion');
           /* $table->integer('descriptor_id')->unsigned();
            $table->foreign('descriptor_id')->references('id')->on('descriptores');
           */ 
            $table->text('observacion');
        
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
        Schema::dropIfExists('bienes');
    }
}
