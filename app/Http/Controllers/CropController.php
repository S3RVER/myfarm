<?php

namespace App\Http\Controllers;

use App\Crop;
use App\Http\Requests\CropRequest;

class CropController extends Controller{

    public function index(){
        $data = Crop::all();
        return view('crops.index', ['data' => $data]);
    }

    public function create(){
        return view('crops.create');
    }

    public function store(CropRequest $request){
        Crop::create($request->all());
        return redirect()->route('crops.index')->with(['success' => 'آیتم با موفقیت ایجاد شد']);
    }

    public function show($id){
        $data = Crop::findOrFail($id);
        return view('crops.show', ['data' => $data]);
    }

    public function edit($id){
        $data = Crop::findOrFail($id);
        return view('crops.edit', ['data' => $data]);
    }

    public function update(CropRequest $request, $id){
        $data = Crop::findOrFail($id);
        $has_clay = $request->has_clay ?? false;
        $request->merge(['has_clay' => $has_clay]);
        $input = $request->all();
        $data->fill($input)->save();
        return redirect()->route('crops.index')->with(['success' => 'آیتم با موفقیت ویرایش شد']);
    }

    public function destroy($id){
        Crop::find($id)->delete();
        return redirect()->route('crops.index')->with(['success' => 'آیتم با موفقیت حذف شد']);
    }
}
