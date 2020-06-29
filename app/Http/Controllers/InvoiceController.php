<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceRequest;
use App\Invoice;

class InvoiceController extends Controller{

    public function index(){
        $data = Invoice::all();
        return view('invoices.index', ['data' => $data]);
    }

    public function create(){
        return view('invoices.create');
    }

    public function store(InvoiceRequest $request){
        Invoice::create($request->all());
        return redirect()->route('invoices.index')->with(['success' => 'آیتم با موفقیت ایجاد شد']);
    }

    public function show($id){
        $data = Invoice::findOrFail($id);
        return view('invoices.show', ['data' => $data]);
    }

    public function edit($id){
        $data = Invoice::findOrFail($id);
        return view('invoices.edit', ['data' => $data]);
    }

    public function update(InvoiceRequest $request, $id){
        $data = Invoice::findOrFail($id);
        $input = $request->all();
        $data->fill($input)->save();
        return redirect()->route('invoices.index')->with(['success' => 'آیتم با موفقیت ویرایش شد']);
    }

    public function destroy($id){
        Invoice::find($id)->delete();
        return redirect()->route('invoices.index')->with(['success' => 'آیتم با موفقیت حذف شد']);
    }
}
