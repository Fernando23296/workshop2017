<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('idproducto');

            $table->string('codigo',50);
            $table->string('nombre',100);
            $table->string('slug');
            $table->integer('stock');
            $table->string('tipo',50);
            $table->string('descripcion',512);
            $table->string('imagen', 150);
            $table->integer('precio');
            $table->string('estado',20);

            $table->integer('idlocal')->unsigned();
            $table->foreign('idlocal')
                  ->references('idlocal')
                  ->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
