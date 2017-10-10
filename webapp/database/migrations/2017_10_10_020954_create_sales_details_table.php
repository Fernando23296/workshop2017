<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_details', function (Blueprint $table) {

            $table->integer('iddetalle_venta')->primary();

            $table->integer('cantidad');
            $table->decimal('precio_venta',11,2);
            $table->decimal('descuento',11,2);

            $table->integer('idventa')->unsigned();
            $table->foreign('idventa')
                  ->references('idventa')
                  ->on('sales');

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
        Schema::dropIfExists('sales_details');
    }
}
