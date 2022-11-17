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
        Schema::create('kit_sensores', function (Blueprint $table) {
            $table->id();
            $table->Integer('serialHumedad');
            $table->Integer('serialTemperatura');
            $table->date('fechaColocacion');
            $table->boolean('status');
            
            $table->timestamps();
            //$table->foreignId('id_Reg')->constrained('registros')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kit_sensores');
    }
};
