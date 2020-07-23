<?php

namespace App\Http\Controllers;

use App\Crop;
use App\Crop_recommendation;
use Illuminate\Http\Request;

class CropComputationalRecommendationsController extends Controller{

    public function index($crop_id){
        $data = Crop::findOrFail($crop_id);
        return view('crop_computational_recommendations.index',['data' => $data]);
    }

    public function edit($crop_id){
        $data['crop'] = Crop::findOrFail($crop_id);
        $data['recommendation'] = Crop_recommendation::where('crop_id', $data['crop']->id)->orderby('kind')->orderby('from')->get();
        $select = [
            'phosphorus' => 'فسفر',
            'nitrogen'   => 'اوره',
            'potash'     => 'پتاس',
            'ph'         => 'ph',
        ];
        return view('crop_computational_recommendations.edit', ['data' => $data, 'select' => $select]);
    }

    public function store(Request $request, $crop_id){
        $data = Crop::findOrFail($crop_id);
        $request->merge(['crop_id' => $data->id]);
        Crop_recommendation::create($request->all());
        return redirect()->route('crops.recommendations.edit', $data->id)->with(['success' => 'مقادیر با موفقیت ویرایش شد']);
    }

    public function update(Request $request, $crop_id){
        $data = Crop::findOrFail($crop_id);
        foreach ($request->all()['data'] as $key => $value) {
            $update = [
                'from'          => $value['from'],
                'to'            => $value['to'],
                'value'         => $value['value'],
                'value_bio'     => $value['value_bio'],
                'fee_bio'       => $value['fee_bio'],
                'bio_text'      => $value['bio_text'],
            ];
            if ($data->has_clay) {
                $update['clay'] = $value['clay'] ?? false;
            }
            Crop_recommendation::where('id', $key)->where('crop_id', $data->id)->update($update);
        }
        return redirect()->route('crops.recommendations.edit', $data->id)->with(['success' => 'مقادیر با موفقیت ویرایش شد']);
    }

    public function calculate(Request $request, $crop_id){
        if ($request->nitrogen) {
            $nitrogen = $this->nitrogen($request->nitrogen, $crop_id);
        }

        if ($request->phosphorus) {
            $phosphorus = $this->phosphorus($request->phosphorus, $crop_id);
        }

        if ($request->potash) {
            $potash = $this->potash($request->potash, $request->clay, $crop_id);
        }

        if ($request->ph) {
            $ph = $this->ph($request->ph, $crop_id);
        }
        $data = [
            'phosphorus' => $phosphorus ?? null,
            'nitrogen'   => $nitrogen ?? null,
            'potash'     => $potash ?? null,
            'ph'         => $ph ?? null
        ];
        return redirect()->route('crops.recommendations.index',$crop_id)->with(['data' => $data]);
    }

    private function nitrogen($request, $crop_id){
        $data = Crop_recommendation::where('crop_id', $crop_id)
            ->where('kind','nitrogen')
            ->where(function ($query) use ($request){
                $query->where(function ($query) use ($request){
                    $query->where('from','<=',$request)->where('to','>',$request);
                })->orWhere(function ($query) use ($request) {
                    $query->where('from','<=',$request)->whereNull('to');
                });
            })->first();
        return $data;
    }

    private function phosphorus($request, $crop_id){
        $data = Crop_recommendation::where('crop_id', $crop_id)
            ->where('kind','phosphorus')
            ->where(function ($query) use ($request){
                $query->where(function ($query) use ($request){
                    $query->where('from','<=',$request)->where('to','>',$request);
                })->orWhere(function ($query) use ($request) {
                    $query->where('from','<=',$request)->whereNull('to');
                });
            })->first();
        return $data;
    }

    private function potash($request, $clay, $crop_id){
        $data = Crop_recommendation::where('crop_id', $crop_id)
            ->where('kind', 'potash')
            ->where(function ($query) use ($request, $clay){
                $query->where(function ($query) use ($request, $clay){
                    $query->where('from','<=',$request)->where('to','>',$request);
                    if ($clay > 30) {
                        $query->where('clay',true);
                    }else{
                        $query->where('clay',false);
                    }
                })->orWhere(function ($query) use ($request,$clay) {
                    $query->where('from','<=',$request)->whereNull('to');
                    if ($clay > 30) {
                        $query->where('clay',true);
                    }else{
                        $query->where('clay',false);
                    }
                });
            })->first();
        return $data;
    }

    private function ph($request, $crop_id){
        $data = Crop_recommendation::where('crop_id', $crop_id)
            ->where('kind','ph')
            ->where(function ($query) use ($request){
                $query->where(function ($query) use ($request){
                    $query->where('from','<=',$request)->where('to','>',$request);
                })->orWhere(function ($query) use ($request) {
                    $query->where('from','<=',$request)->whereNull('to');
                });
            })->first();
        return $data;
    }

    public function destroy($crop_id){
        Crop_recommendation::where('id', $crop_id)->delete();
        return redirect()->back()->with(['success' => 'سطر با موفقیت حذف شد']);
    }

}
