<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitrusNitrogenFertilizersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citrus_nitrogen_fertilizers', function (Blueprint $table) {
            $table->id();
            $table->mediumInteger('tree_age')->unsigned();
            $table->mediumInteger('less_than_1')->unsigned();
            $table->mediumInteger('between_1_and_2')->unsigned();
            $table->mediumInteger('more_than_2')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citrus_nitrogen_fertilizers');
    }
}
