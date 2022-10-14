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
            $table->double('latitud');
            $table->double('longitud');
            $table->double('periodoDeRegistro');
            $table->timestamps();
            $table->foreignId('id_Kit')->constrained('kit_sensores');
            $table->foreignId('id_Alarma')->constrained('alarmas');
            //$table->foreignId("id_Cultivo")->constrained("cultivos");

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
