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
        Schema::create('zonas', function (Blueprint $table) {
            $table->id();
            $table->String('nombre',100);
            $table->double('latitud')->nullable();
            $table->double('longitud')->nullable();
            $table->double('periodoDeRegistro')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('id_Kit')->unique()->nullable();

            $table->foreign('id_Kit')->references('id')->on('kit_sensores')
          //->nullOnDelete()
            ->cascadeOnUpdate();
            //$table->foreignId('id_Alarma')->constrained('alarmas')
            //->nullOnDelete()
           // ->cascadeOnUpdate();
           $table->unsignedBigInteger('id_Cultivo')->unique()->nullable();
            $table->foreign("id_Cultivo")->references('id')->on('cultivos')
            //->nullOnDelete()
            ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zonas');
    }
};
