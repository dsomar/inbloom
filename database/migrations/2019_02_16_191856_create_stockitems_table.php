<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Update the id_variant field to be a foreign key
        Schema::table('stockitems', function(Blueprint $table)
        {
            $table->foreign('id_variant')
                    ->references('id')
                    ->on('variants');
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
