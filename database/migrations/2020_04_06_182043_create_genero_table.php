<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_Genero', function (Blueprint $table) {
            $table->increments('Gen_id');
            $table->string('gen_Nombre',40)->unique();
            $table->unsignedInteger('Cuar_ID');
            $table->foreign('Cuar_ID')->references('Cuar_ID')->on('TBL_Cuarto');
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
        Schema::dropIfExists('genero');
    }
}
