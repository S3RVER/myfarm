<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\DiseaseCategoryRequest;

class DiseaseCategoryController extends Controller{

    public function index(){
        $data = Category::where('parent_id', 5)->get();
        return view('diseases.index', ['data' => $data]);
    }

    public function create(){
        return view('diseases.create');
    }

    public function store(DiseaseCategoryRequest $request){
        $category = Category::findOrFail(5);
        $category = $category->children()->create($request->all());
        $sub_categories = [
            'بیماری ها',
            'آفت ها',
            'کمبود عناصر',
            'نماتود'
        ];
        foreach ($sub_categories as $key => $value) {
            $category->children()->create(['title' => $value]);
        }
        return redirect()->route('diseases.index')->with(['success' => 'آیتم با موفقیت ایجاد شد']);
    }

    public function show($id){
        $data = Category::findOrFail($id);
        return view('faq.show', ['data' => $data]);
    }

    public function edit($id){
        $data = Category::findOrFail($id);
        return view('diseases.edit', ['data' => $data]);
    }

    public function update(DiseaseCategoryRequest $request, $id){
        $data = Category::findOrFail($id);
        $input = $request->all();
        $data->fill($input)->save();
        return redirect()->route('diseases.index')->with(['success' => 'آیتم با موفقیت ویرایش شد']);
    }

    public function destroy($id){
        $data = Category::findOrFail($id);
        $data->delete();
        return redirect()->route('diseases.index')->with(['success' => 'آیتم با موفقیت حذف شد']);
    }

}
