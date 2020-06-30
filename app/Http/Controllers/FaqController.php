<?php

namespace App\Http\Controllers;

use App\Item as Faq;
use App\Http\Requests\FaqRequest;

class FaqController extends Controller{

    public function index(){
        $data = Faq::where('category_id', 1)->get();
        return view('faq.index', ['data' => $data]);
    }

    public function create(){
        return view('faq.create');
    }

    public function store(FaqRequest $request){
        $request->merge(['category_id' => 1]);
        Faq::create($request->all());
        return redirect()->route('faq.index')->with(['success' => 'آیتم با موفقیت ایجاد شد']);
    }

    public function show($id){
        $data = Faq::findOrFail($id);
        return view('faq.show', ['data' => $data]);
    }

    public function edit($id){
        $data = Faq::findOrFail($id);
        return view('faq.edit', ['data' => $data]);
    }

    public function update(FaqRequest $request, $id){
        $data = Faq::findOrFail($id);
        $request->merge(['category_id' => 1]);
        $input = $request->all();
        $data->fill($input)->save();
        return redirect()->route('faq.index')->with(['success' => 'آیتم با موفقیت ویرایش شد']);
    }

    public function destroy($id){
        Faq::find($id)->delete();
        return redirect()->route('faq.index')->with(['success' => 'آیتم با موفقیت حذف شد']);
    }
}
