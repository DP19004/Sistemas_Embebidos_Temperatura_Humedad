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

            $table->unsignedBigInteger('id_Kit')->unique();

            $table->foreign('id_Kit')->references('id')
            ->on('kit_sensores')
          //->nullOnDelete()
            ->cascadeOnUpdate();
            $table->foreignId('id_Alarma')->constrained('alarmas')
            //->nullOnDelete()
            ->cascadeOnUpdate();
            $table->foreignId("id_Cultivo")->constrained("cultivos")
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
