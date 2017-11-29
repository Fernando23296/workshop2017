<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_user', function (Blueprint $table) {
            $table->integer('idrol_usuario')->primary();
            $table->integer('valor',7);

            $table->integer('idrol')->unsigned();
            $table->foreign('idrol')
                  ->references('idrol')
                  ->on('roles');

            $table->integer('iduser')->unsigned();
            $table->foreign('iduser')
                  ->references('id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_user');
    }
}
