<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller{

    public function index(){
        $data = Category::all();
        return view('categories.index', ['data' => $data]);
    }

    public function create(){
        return view('categories.create');
    }

    public function store(CategoryRequest $request){
        Category::create($request->all());
        return redirect()->route('categories.index')->with(['success' => 'آیتم با موفقیت ایجاد شد']);
    }

    public function show($id){
        $data = Category::findOrFail($id);
        return view('categories.show', ['data' => $data]);
    }

    public function edit($id){
        $data = Category::findOrFail($id);
        return view('categories.edit', ['data' => $data]);
    }

    public function update(CategoryRequest $request, $id){
        $data = Category::findOrFail($id);
        $input = $request->all();
        $data->fill($input)->save();
        return redirect()->route('categories.index')->with(['success' => 'آیتم با موفقیت ویرایش شد']);
    }

    public function destroy($id){
        Category::find($id)->delete();
        return redirect()->route('categories.index')->with(['success' => 'آیتم با موفقیت حذف شد']);
    }
}
