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
            $table->increments('id');
            $table->timestamps();
            $table->string('description')->comment('Zoom Stefan Janoski Pr Qs Tie Dye');
            $table->string('brand')->comment('Nike');
            $table->string('category')->comment('Footwear');
        });

        Schema::create('variants', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('size')->comment('Expects a size such as 7 or 40cm');
            $table->float('quantity');
            $table->string('manufacturer_sku')->comment('The barcode of the box for a particular shoe or hat');
        });

        // Schema::table('variants', function(Blueprint $table)
        // {
        //     $table->foreign('user_id')
        //             ->references('id')
        //             ->on('users')
        //             ->onUpdate('cascade')
        //             ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('variants');
    }
}
