<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\DiseaseItemRequest;
use App\Item;

class DiseaseItemController extends Controller{

    public function index($category_id){
        $data['self'] = Category::findOrFail($category_id);
        $data['items'] = Item::whereIn('category_id', Category::where('parent_id',$category_id)->get('id'))->orderBy('id','desc')->get();
        return view('disease_items.index',['data' => $data]);
    }

    public function create($category_id){
        $data['self'] = Category::findOrFail($category_id);
        $category = Category::where('parent_id',$category_id)->get(['id','title']);
        $select = [];
        foreach ($category as $key => $value) {
            $select[$value->id] = $value->title;
        }
        return view('disease_items.create',['data' => $data, 'select' => $select]);
    }

    public function store(DiseaseItemRequest $request, $category_id){
        if ($request->hasFile('image')) {
            $image_path = $request->image->store('diseases','public');
            $request->merge(['image_path' => $image_path]);
        }
        Item::create($request->all());
        return redirect()->route('diseases.items.index',$category_id)->with(['success' => 'آیتم با موفقیت ایجاد شد']);
    }

    public function show($category_id,$id){
        $data = Item::findOrFail($id);
        return view('disease_items.show', ['data' => $data]);
    }

    public function edit($category_id,$id){
        $data['self'] = Category::findOrFail($category_id);
        $data['item'] = Item::findOrFail($id);
        $category = Category::where('parent_id',$category_id)->get(['id','title']);
        $select = [];
        foreach ($category as $key => $value) {
            $select[$value->id] = $value->title;
        }
        return view('disease_items.edit', ['data' => $data,'select' => $select]);
    }

    public function update(DiseaseItemRequest $request,$category_id,$id){
        $data = Item::findOrFail($id);
        if ($request->hasFile('image')) {
            $image_path = $request->image->store('diseases','public');
            $request->merge(['image_path' => $image_path]);
        }
        $input = $request->all();
        $data->fill($input)->save();
        return redirect()->route('diseases.items.index',$category_id)->with(['success' => 'آیتم با موفقیت ویرایش شد']);
    }

    public function destroy($category_id,$id){
        $data = Item::findOrFail($id);
        $data->delete();
        return redirect()->route('diseases.items.index',$category_id)->with(['success' => 'آیتم با موفقیت حذف شد']);
    }

}
