<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller{

    public function getFaq(){
        $data = Item::where('category_id',1)->orderby('id','desc')->get(['id', 'title', 'content']);
        return response(['result' => true, 'data' => $data]);
    }

    public function getAllGeneralTips(){
        $data = Item::whereIn('category_id',[3,4])->with('category')->orderby('id','desc')->get();
        return response(['result' => true, 'data' => $data]);
    }

    public function getCitrusGeneralTips(){
        $data = Item::where('category_id', 3)->with('category')->orderby('id','desc')->get();
        return response(['result' => true, 'data' => $data]);
    }

    public function getCropGeneralTips(){
        $data = Item::where('category_id', 4)->with('category')->orderby('id','desc')->get();
        return response(['result' => true, 'data' => $data]);
    }

    public function getProductsAllDiseases(){
        $data = Category::where('parent_id', 5)->orderby('id','desc')->get();
        return response(['result' => true, 'data' => $data]);
    }

    public function getProductsDiseases1Cat($id){
        if ($id) {
            $category = Category::where('parent_id', $id)->where('title', 'بیماری')->first(['id']);
            if ($category) {
                $data = Item::where('category_id', $category->id)->get();
                return response(['result' => true, 'data' => $data]);
            }
        }
        return response(['result' => false, 'data' => 'خطا رخ داده است'],404);
    }

    public function getProductsDiseases2Cat($id){
        if ($id) {
            $category = Category::where('parent_id', $id)->where('title', 'آفات')->first(['id']);
            if ($category) {
                $data = Item::where('category_id', $category->id)->get();
                return response(['result' => true, 'data' => $data]);
            }
        }
        return response(['result' => false, 'data' => 'خطا رخ داده است'],404);
    }

    public function getProductsDiseases3Cat($id){
        if ($id) {
            $category = Category::where('parent_id', $id)->where('title', 'کمبود عناصر')->first(['id']);
            if ($category) {
                $data = Item::where('category_id', $category->id)->get();
                return response(['result' => true, 'data' => $data]);
            }
        }
        return response(['result' => false, 'data' => 'خطا رخ داده است'],404);
    }

    public function getProductsDiseases4Cat($id){
        if ($id) {
            $category = Category::where('parent_id', $id)->where('title', 'علف هرز')->first(['id']);
            if ($category) {
                $data = Item::where('category_id', $category->id)->get();
                return response(['result' => true, 'data' => $data]);
            }
        }
        return response(['result' => false, 'data' => 'خطا رخ داده است'],404);
    }

    public function getDiseaseItem($id){
        if ($id) {
            $data = Item::where('id', $id)->firstOrFail();
            return response(['result' => true, 'data' => $data]);
        }
        return response(['result' => false, 'data' => 'خطا رخ داده است'],404);
    }

    public function getGeneralTipItemById($id){
        if ($id) {
            $data = Item::where('id', $id)->firstOrFail();
            return response(['result' => true, 'data' => $data]);
        }
        return response(['result' => false, 'data' => 'خطا رخ داده است'],404);
    }



}
