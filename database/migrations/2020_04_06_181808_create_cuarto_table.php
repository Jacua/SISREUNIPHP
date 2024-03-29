<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuartoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_Cuarto', function (Blueprint $table) {
            $table->increments('Cuar_ID');
            $table->Integer('cuar_Numero');
            $table->unsignedInteger('Gen_id');
            $table->foreign('Gen_id')->references('Gen_id')->on('TBL_Genero');
            $table->string('cuar_Ubicacion',70);
            $table->boolean('cuar_Estado')->default(1);
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
        Schema::dropIfExists('cuarto');
    }
}
