<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarketProductRequest;
use App\Market_product;

class MarketProductController extends Controller{

    public function index(){
        $data = Market_product::all();
        return view('market_products.index', ['data' => $data]);
    }

    public function create(){
        return view('market_products.create');
    }

    public function store(MarketProductRequest $request){
        Market_product::create($request->all());
        return redirect()->route('market-products.index')->with(['success' => 'آیتم با موفقیت ایجاد شد']);
    }

    public function show($id){
        $data = Market_product::findOrFail($id);
        return view('market_products.show', ['data' => $data]);
    }

    public function edit($id){
        $data = Market_product::findOrFail($id);
        return view('market_products.edit', ['data' => $data]);
    }

    public function update(MarketProductRequest $request, $id){
        $data = Market_product::findOrFail($id);
        $input = $request->all();
        $data->fill($input)->save();
        return redirect()->route('market-products.index')->with(['success' => 'آیتم با موفقیت ویرایش شد']);
    }

    public function destroy($id){
        Market_product::find($id)->delete();
        return redirect()->route('market-products.index')->with(['success' => 'آیتم با موفقیت حذف شد']);
    }
}
