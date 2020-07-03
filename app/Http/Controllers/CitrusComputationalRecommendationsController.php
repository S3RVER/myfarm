<?php

namespace App\Http\Controllers;

use App\Citrus_nitrogen_fertilizer;
use Illuminate\Http\Request;

class CitrusComputationalRecommendationsController extends Controller{

    public function index(){
        return view('citrus_computational_recommendations.index');
    }

    public function calculate(Request $request){
        if ($request->organic_material < 1) {
            $col_name = 'less_than_1';
        } elseif (($request->organic_material >= 1) and ($request->organic_material <= 2)) {
            $col_name = 'between_1_and_2';
        } elseif ($request->organic_material > 2) {
            $col_name = 'more_than_2';
        }
        $data = Citrus_nitrogen_fertilizer::where('tree_age', $request->tree_age)->select([$col_name.' AS nitrogen_fertilizer'])->first();
        $result = 'شما نیاز به '.$data->nitrogen_fertilizer.' کیلوگرم اوره میباشید';
        return redirect()->route('citrus_c_r.index')->with(['success' => $result]);
    }

}
