<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputationalRecommendationsController extends Controller{
    public function index(){
        $data = [];
        return view('computational_recommendations.index', ['data' => $data]);
    }
}
