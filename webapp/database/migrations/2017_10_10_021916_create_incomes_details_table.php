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
            $table->string('iddetalle_ingreso',15)->primary();

            $table->integer('cantidad');
            $table->decimal('precio_compra',11,2);

            $table->string('idingreso',15)->unsigned();
            $table->foreign('idingreso')
                  ->references('idingreso')
                  ->on('entries');

            $table->string('idproducto',15)->unsigned();
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
