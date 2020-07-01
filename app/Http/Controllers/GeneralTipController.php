<?php

namespace App\Http\Controllers;

use App\Item as General_tip;
use App\Http\Requests\GeneralTipRequest;

class GeneralTipController extends Controller{

    public function index(){
        $data = General_tip::whereIn('category_id',[3,4])->get();
        return view('general_tips.index', ['data' => $data]);
    }

    public function create(){
        return view('general_tips.create');
    }

    public function store(GeneralTipRequest $request){
        dd($request->all());
        General_tip::create($request->all());
        return redirect()->route('general-tips.index')->with(['success' => 'آیتم با موفقیت ایجاد شد']);
    }

    public function show($id){
        $data = General_tip::findOrFail($id);
        return view('general_tips.show', ['data' => $data]);
    }

    public function edit($id){
        $data = General_tip::findOrFail($id);
        return view('general_tips.edit', ['data' => $data]);
    }

    public function update(GeneralTipRequest $request, $id){
        $data = General_tip::findOrFail($id);
        $input = $request->all();
        $data->fill($input)->save();
        return redirect()->route('general-tips.index')->with(['success' => 'آیتم با موفقیت ویرایش شد']);
    }

    public function destroy($id){
        General_tip::find($id)->delete();
        return redirect()->route('general-tips.index')->with(['success' => 'آیتم با موفقیت حذف شد']);
    }
}
