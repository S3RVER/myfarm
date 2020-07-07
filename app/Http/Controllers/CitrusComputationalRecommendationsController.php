<?php

namespace App\Http\Controllers;

use App\Citrus_recommandation;
use App\Http\Requests\CitrusComputationalRecommendationsRequest;

class CitrusComputationalRecommendationsController extends Controller{

    public function index(){
        return view('citrus_computational_recommendations.index');
    }

    public function calculate(CitrusComputationalRecommendationsRequest $request){
        $nitrogen_fertilizer = $this->nitrogen_fertilizer($request);
        $select = [
            'tree_age',
            $nitrogen_fertilizer[0],
            $nitrogen_fertilizer[1],
            $this->phosphorus($request),
            $this->potash($request),
        ];

        $data = Citrus_recommandation::where('tree_age', $request->tree_age)->select(array_filter($select))->first();

        return redirect()->route('citrus_c_r.index')->with(['data' => $data]);
    }

    private function nitrogen_fertilizer($request){
        $col_name = null;
        if ($request->organic_material and $request->organic_material < 1) {
            $col_name = 'oc_less_than_1';
        } elseif (($request->organic_material >= 1) and ($request->organic_material <= 2)) {
            $col_name = 'oc_between_1_and_2';
        } elseif ($request->organic_material > 2) {
            $col_name = 'oc_more_than_2';
        }
        return [
            ($col_name != null)? $col_name.' AS nitrogen_fertilizer' : null,
            ($col_name != null)? $col_name.'_bio AS nitrogen_fertilizer_bio' : null
        ];
    }

    private function phosphorus($request){
        $col_name = null;
        if ($request->phosphorus and $request->phosphorus < 5) {
            $col_name = 'p_less_than_5';
        } elseif (($request->phosphorus >= 5) and ($request->phosphorus < 10)) {
            $col_name = 'p_between_5_and_10';
        } elseif (($request->phosphorus >= 10) and ($request->phosphorus <= 15)) {
            $col_name = 'p_between_10_and_15';
        }
        return ($col_name != null)? $col_name.' AS phosphorus': null;
    }

    private function potash($request){
        $col_name = null;
        if ($request->potash and $request->potash < 150) {
            $col_name = 'k_less_than_150';
        } elseif (($request->potash >= 150) and ($request->potash < 250)) {
            $col_name = 'k_between_150_and_250';
        } elseif (($request->potash >= 250) and ($request->potash <= 300)) {
            $col_name = 'k_between_250_and_300';
        }
        return ($col_name != null)? $col_name.' AS potash': null;
    }

}
