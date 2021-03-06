<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientesDeRecetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientes_de_receta', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->timestamps();
           
            
            $table->string('receta_nombre');
            $table->unsignedBigInteger('medida_id');
            $table->unsignedBigInteger('ingrediente_id');
            $table->unsignedBigInteger('cantidad');
            
            
            $table->foreign('receta_nombre')->references('nombre')->on('recetas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('medida_id')->references('id')->on('medidas');
            $table->foreign('ingrediente_id')->references('id')->on('ingredientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredientes_de_receta');
    }
}
