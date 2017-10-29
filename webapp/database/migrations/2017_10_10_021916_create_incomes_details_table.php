<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes_details', function (Blueprint $table) {
            $table->integer('iddetalle_ingreso')->primary();
            $table->integer('cantidad');
            $table->decimal('precio_compra',11,2);

            $table->integer('idingreso')->unsigned();
            $table->foreign('idingreso')
                  ->references('idingreso')
                  ->on('entries');

            $table->integer('idproducto')->unsigned();
            $table->foreign('idproducto')
                  ->references('idproducto')
                  ->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incomes_details');
    }
}
