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
            $table->integer('id_variant')->comment('The ID of the variant which would store size 7 or 40cm');
        });

        Schema::create('variants', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('size')->comment('Expects a size such as 7 or 40cm');
        });

        // Update the id_variant field to be a foreign key
        Schema::table('products', function(Blueprint $table)
        {
            $table->foreign('id_variant')
                    ->references('id')
                    ->on('variants');
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
