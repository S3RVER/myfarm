<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitrusRecommendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citrus_recommendations', function (Blueprint $table) {
            $table->id();
            $table->mediumInteger('tree_age')->unsigned()->nullable();

            $table->mediumInteger('nitrogen_less_than_1')->unsigned()->nullable();
            $table->mediumInteger('nitrogen_between_1_and_2')->unsigned()->nullable();
            $table->mediumInteger('nitrogen_more_than_2')->unsigned()->nullable();

            $table->mediumInteger('nitrogen_less_than_1_bio')->unsigned()->nullable();
            $table->mediumInteger('nitrogen_between_1_and_2_bio')->unsigned()->nullable();
            $table->mediumInteger('nitrogen_more_than_2_bio')->unsigned()->nullable();

            $table->mediumInteger('phosphorus_less_than_5')->unsigned()->nullable();
            $table->mediumInteger('phosphorus_between_5_and_10')->unsigned()->nullable();
            $table->mediumInteger('phosphorus_between_10_and_15')->unsigned()->nullable();

            $table->mediumInteger('phosphorus_less_than_5_bio')->unsigned()->nullable();
            $table->mediumInteger('phosphorus_between_5_and_10_bio')->unsigned()->nullable();
            $table->mediumInteger('phosphorus_between_10_and_15_bio')->unsigned()->nullable();

            $table->mediumInteger('potash_less_than_150')->unsigned()->nullable();
            $table->mediumInteger('potash_between_150_and_250')->unsigned()->nullable();
            $table->mediumInteger('potash_between_250_and_300')->unsigned()->nullable();

            $table->mediumInteger('potash_less_than_150_bio')->unsigned()->nullable();
            $table->mediumInteger('potash_between_150_and_250_bio')->unsigned()->nullable();
            $table->mediumInteger('potash_between_250_and_300_bio')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citrus_recommandations');
    }
}
