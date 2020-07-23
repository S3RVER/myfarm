<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\CitrusComputationalRecommendationsController;

class CitrusRecommendationController extends CitrusComputationalRecommendationsController{

    public function calculate_result($data){
        return response()->json(['data' => $data]);
    }

}
