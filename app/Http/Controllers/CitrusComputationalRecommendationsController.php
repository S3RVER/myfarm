<?php

namespace App\Http\Controllers;

use App\Citrus_recommendation;
use App\Http\Requests\CitrusComputationalRecommendationsRequest;
use Illuminate\Http\Request;

class CitrusComputationalRecommendationsController extends Controller{

    public function index(){
        return view('citrus_computational_recommendations.index');
    }

    public function calculate(CitrusComputationalRecommendationsRequest $request){
        $nitrogen = $this->nitrogen($request);
        $phosphorus = $this->phosphorus($request);
        $potash = $this->potash($request);

        $select = [
            'tree_age',

            $nitrogen[0],
            $nitrogen[1],

            $phosphorus[0],
            $phosphorus[1],

            $potash[0],
            $potash[1],
        ];

        $data = Citrus_recommendation::where('tree_age', $request->tree_age)->select(array_filter($select))->first();
        return $this->calculate_result($data);
    }

    public function calculate_result($data){
        return redirect()->route('citrus_c_r.index')->with(['data' => $data]);
    }

    private function nitrogen($request){
        $col_name = null;
        if ($request->nitrogen and $request->nitrogen < 1) {
            $col_name = 'nitrogen_less_than_1';
        } elseif (($request->nitrogen >= 1) and ($request->nitrogen <= 2)) {
            $col_name = 'nitrogen_between_1_and_2';
        } elseif ($request->nitrogen > 2) {
            $col_name = 'nitrogen_more_than_2';
        }
        return [
            ($col_name != null)? $col_name.' AS nitrogen' : null,
            ($col_name != null)? $col_name.'_bio AS nitrogen_bio' : null
        ];
    }

    private function phosphorus($request){
        $col_name = null;
        if ($request->phosphorus and $request->phosphorus < 5) {
            $col_name = 'phosphorus_less_than_5';
        } elseif (($request->phosphorus >= 5) and ($request->phosphorus < 10)) {
            $col_name = 'phosphorus_between_5_and_10';
        } elseif (($request->phosphorus >= 10) and ($request->phosphorus <= 15)) {
            $col_name = 'phosphorus_between_10_and_15';
        }
        return [
            ($col_name != null)? $col_name.' AS phosphorus': null,
            ($col_name != null)? $col_name.'_bio AS phosphorus_bio': null
        ];
    }

    private function potash($request){
        $col_name = null;
        if ($request->potash and $request->potash < 150) {
            $col_name = 'potash_less_than_150';
        } elseif (($request->potash >= 150) and ($request->potash < 250)) {
            $col_name = 'potash_between_150_and_250';
        } elseif (($request->potash >= 250) and ($request->potash <= 300)) {
            $col_name = 'potash_between_250_and_300';
        }
        return [
            ($col_name != null)? $col_name.' AS potash': null,
            ($col_name != null)? $col_name.'_bio AS potash_bio': null
        ];
    }

    public function edit(){
        $data = Citrus_recommendation::all();
        return view('citrus_computational_recommendations.edit',['data' => $data]);
    }

    public function update(Request $request){
        $insert = [];
        foreach ($request->all()['data'] as $key => $value) {
            $insert[$key] = $value;
            $insert[$key]['tree_age'] = $key;
        }

        Citrus_recommendation::query()->truncate();
        Citrus_recommendation::insert($insert);
        return redirect()->route('citrus_c_r.index')->with(['success' => 'مقادیر با موفقیت ویرایش شد']);
    }

}
