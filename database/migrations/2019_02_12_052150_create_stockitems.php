<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockitems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockitems', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('serialized_id')->comment('A unique SKU for the inventory item');
            $table->float('price')->comment('The price of the item as 22.00');
            $table->string('description');
            $table->integer('id_variant')->comment('The ID of the variant which would store size 7 or 40cm');
            $table->string('markdowncode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stockitems');
    }
}
