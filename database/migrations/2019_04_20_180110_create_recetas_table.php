<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
           
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('pasos',500);
            $table->unsignedBigInteger('id_autor');
            $table->unsignedBigInteger('lista_id');
            $table->integer('categoria');
            $table->string('imagen',400)->nullable();
            $table->foreign('id_autor')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('lista_id')->references('id')->on('listas')->onDelete('cascade')->onUpdate('cascade') ;
            
            $table->primary(['nombre','lista_id']);
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
        Schema::dropIfExists('recetas');
    }
}
