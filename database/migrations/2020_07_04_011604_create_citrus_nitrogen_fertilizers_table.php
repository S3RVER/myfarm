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
            $table->mediumInteger('oc_less_than_1')->unsigned();
            $table->mediumInteger('oc_between_1_and_2')->unsigned();
            $table->mediumInteger('oc_more_than_2')->unsigned();

            $table->mediumInteger('oc_less_than_1_bio')->unsigned();
            $table->mediumInteger('oc_between_1_and_2_bio')->unsigned();
            $table->mediumInteger('oc_more_than_2_bio')->unsigned();

            $table->mediumInteger('p_less_than_5')->unsigned();
            $table->mediumInteger('p_between_5_and_10')->unsigned();
            $table->mediumInteger('p_between_10_and_15')->unsigned();

            $table->mediumInteger('k_less_than_150')->unsigned();
            $table->mediumInteger('k_between_150_and_250')->unsigned();
            $table->mediumInteger('k_between_250_and_300')->unsigned();
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
