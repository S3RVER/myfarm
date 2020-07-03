<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item as General_tip;
use App\Http\Requests\GeneralTipRequest;

class GeneralTipController extends Controller{

    public function index(){
        $data = General_tip::whereIn('category_id',[3,4])->orderBy('id','desc')->get();
        return view('general_tips.index', ['data' => $data]);
    }

    public function create(){
        $categories = Category::whereIn('id',[3,4])->get();
        $select = [];
        foreach ($categories as $key => $value) {
            $select[$value->id] = $value->title;
        }
        return view('general_tips.create', ['select' => $select]);
    }

    public function store(GeneralTipRequest $request){
        $content = [];
        foreach ($request->all()['item'] as $key => $value){
            $content[$key]['title'] = $value['heading'];
            foreach ($value['sub_heading'] as $_key => $_value){
                $content[$key]['contents'][] = [
                    'sub_heading' => $_value,
                    'content' => $value['content'][$_key]
                ];
            }
        }
        $content = serialize(array_values($content));
        $request->merge(['content' => $content, 'is_list' => true]);
        General_tip::create($request->all());
        return redirect()->route('general-tips.index')->with(['success' => 'آیتم با موفقیت ایجاد شد']);
    }

    public function show($id){
        $data = General_tip::findOrFail($id);
        return view('general_tips.show', ['data' => $data]);
    }

    public function edit($id){
        $data = General_tip::where('id',$id)->whereIn('category_id',[3,4])->firstOrFail();
        $categories = Category::whereIn('id',[3,4])->get();
        $select = [];
        foreach ($categories as $key => $value) {
            $select[$value->id] = $value->title;
        }
        $data->content = unserialize($data->content);

        // TODO : remove button in the form - alireza
        return view('general_tips.edit', ['data' => $data,'select' => $select]);
    }

    public function update(GeneralTipRequest $request, $id){
        $data = General_tip::where('id',$id)->whereIn('category_id',[3,4])->firstOrFail();
        $content = [];
        foreach ($request->all()['item'] as $key => $value){
            $content[$key]['title'] = $value['heading'];
            foreach ($value['sub_heading'] as $_key => $_value){
                $content[$key]['contents'][] = [
                    'sub_heading' => $_value,
                    'content' => $value['content'][$_key]
                ];
            }
        }
        $content = serialize(array_values($content));
        $request->merge(['content' => $content, 'is_list' => true]);
        $input = $request->all();
        $data->fill($input)->save();
        return redirect()->route('general-tips.index')->with(['success' => 'آیتم با موفقیت ویرایش شد']);
    }

    public function destroy($id){
        General_tip::where('id',$id)->whereIn('category_id',[3,4])->delete();
        return redirect()->route('general-tips.index')->with(['success' => 'آیتم با موفقیت حذف شد']);
    }
}
