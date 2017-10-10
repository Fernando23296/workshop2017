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
            $table->string('idproducto',15)->primary();

            $table->string('codigo',50);
            $table->string('nombre',100);
            $table->integer('stock');
            $table->string('descripcion',512);
            $table->string('imagen', 50);
            $table->string('estado',20);

            $table->string('idlocal',15)->unsigned();
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
