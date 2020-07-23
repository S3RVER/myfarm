<?php

namespace App\Http\Controllers\Api;

use App\Crop;
use App\Http\Controllers\CropComputationalRecommendationsController;

class CropRecommendationController extends CropComputationalRecommendationsController{

    public function getCrops(){
        $data = Crop::all();
        return response()->json(['data' => $data]);
    }

    public function calculate_result($data){
        return response()->json(['data' => $data]);
    }

}
