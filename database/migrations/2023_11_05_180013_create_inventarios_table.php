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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->string('serial');
            $table->unsignedBigInteger('idTipoActivo');
                $table->foreing('idTipoActivo')>references('id')->on('TipoActivo');
            $table->string('modelo');
            $table->string('marca');
            $table->string('valor');
            $table->date('fechaAdquisicion');
            $table->date('fechaSalida');
            $table->string('idEstadoActivo');
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
        Schema::dropIfExists('inventarios');
    }
};
