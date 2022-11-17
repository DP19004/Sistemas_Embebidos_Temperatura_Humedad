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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();

            $table->date('fecha');
            $table->time('hora');
            $table->unsignedBigInteger('id_Kit')->nullable();
            $table->unsignedBigInteger('id_Temp')->nullable()->unique();
            $table->unsignedBigInteger('id_Hum')->nullable()->unique();

            $table->foreign('id_Kit')->references('id')->on('kit_sensores')->cascadeOnUpdate();
            $table->foreign('id_Temp')->references('id')->on('temperaturas')->cascadeOnUpdate();
            $table->foreign('id_Hum')->references('id')->on('humedads')->cascadeOnUpdate();
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
        Schema::dropIfExists('registros');
    }
};
