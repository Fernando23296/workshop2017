<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->integer('idpersona')->primary();
            $table->string('tipo_persona',20);
            $table->string('nombre',100);
            $table->string('tipo_documento',20);
            $table->string('num_documento',15);
            $table->string('direccion',70);
            $table->string('telefono',15);
            $table->string('email',50);
            $table->integer('user')->unsigned();
            $table->foreign('user')
                  ->references('id')
                  ->on('users');


            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
