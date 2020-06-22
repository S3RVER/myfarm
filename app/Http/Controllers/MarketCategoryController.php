<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarketCategoryRequest;
use App\Market_category;

class MarketCategoryController extends Controller{

    public function index(){
        $data = Market_category::all();
        return view('market_categories.index', ['data' => $data]);
    }

    public function create(){
        return view('market_categories.create');
    }

    public function store(MarketCategoryRequest $request){
        Market_category::create($request->all());
        return redirect()->route('market-categories.index')->with(['success' => 'آیتم با موفقیت ایجاد شد']);
    }

    public function show($id){
        $data = Market_category::findOrFail($id);
        return view('market_categories.show', ['data' => $data]);
    }

    public function edit($id){
        $data = Market_category::findOrFail($id);
        return view('market_categories.edit', ['data' => $data]);
    }

    public function update(MarketCategoryRequest $request, $id){
        $data = Market_category::findOrFail($id);
        $input = $request->all();
        $data->fill($input)->save();
        return redirect()->route('market-categories.index')->with(['success' => 'آیتم با موفقیت ویرایش شد']);
    }

    public function destroy($id){
        Market_category::find($id)->delete();
        return redirect()->route('market-categories.index')->with(['success' => 'آیتم با موفقیت حذف شد']);
    }
}
