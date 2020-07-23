<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCropRecommendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop_recommendations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('crop_id');
            $table->string('kind');
            $table->float('from')->default(0)->nullable();
            $table->float('to')->nullable();
            $table->float('value')->nullable();
            $table->float('value_bio')->nullable();
            $table->integer('fee_bio')->nullable();
            $table->string('bio_text')->nullable();
            $table->boolean('clay')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crop_recommendations');
    }
}
