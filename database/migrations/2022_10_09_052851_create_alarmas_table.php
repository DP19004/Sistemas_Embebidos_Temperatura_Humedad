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
        Schema::create('alarmas', function (Blueprint $table) {        
            $table->id();
            $table->string('nombre');
            $table->double('temperaturaMax');
            $table->double('temperaturaMin');
            $table->double('humedadMax');
            $table->double('humedadMin');
            $table->string('importancia');
            $table->boolean('status');
            $table->string('recomendacion');
            $table->timestamps();
            
            $table->unsignedBigInteger('id_Zona');
            $table->foreign('id_Zona')->references('id')
            ->on('zonas'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alarmas');
    }
};
