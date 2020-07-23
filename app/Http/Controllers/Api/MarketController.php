<?php

namespace App\Http\Controllers\Api;

use App\Cart;
use App\Invoice;
use App\Invoice_products;
use App\Market_address;
use App\Market_category;
use App\Http\Controllers\Controller;
use App\Market_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MarketController extends Controller{
    public function getMarketCategories(){
        $data = Market_category::all();
        return response(['result' => true, 'data' => $data]);
    }

    public function getMarketProductsByCategoryId($catergory_id){
        $data = Market_product::where('category_id', $catergory_id)->get();
        return response(['result' => true, 'data' => $data]);
    }

    public function addProductToCart(Request $request){
        $data = Cart::where('product_id', $request->product_id)->where('user_id', 1)->first();
        if ($data === null) {
            $data = [
                'product_id' => $request->product_id,
                'user_id' => 1,
                'count' => $request->count
            ];
            $data = Cart::create($data);
            return response(['result' => true, 'data' => $data]);
        }else{
            $new_count = $data->count + $request->count;
            $data = [
                'count' => $new_count
            ];
            $data = Cart::where('product_id', $request->product_id)->where('user_id', 1)->update($data);
            if ($data == true) {
                return response(['result' => true, 'data' => [
                    'product_id' => $request->product_id,
                    'count' => $new_count,
                ]]);
            }
        }
        return response(['result' => false, 'data' => ['error' => 'خطا در پردازش. مجددا سعی کنید']]);
    }

    public function changeCartProductCount(Request $request){
        $data = Cart::where('product_id', $request->product_id)->where('user_id', 1)->first();
        if ($data !== null) {
            $product = Market_product::where('id', $request->product_id)->first('price');
            if ($product != null) {
                $new_count = $data->count + $request->count;
                $data = [
                    'count' => $new_count
                ];
                $data = Cart::where('product_id', $request->product_id)->where('user_id', 1)->update($data);
                if ($data == true) {
                    return response(['result' => true, 'data' => [
                        'product_id' => $request->product_id,
                        'count' => $new_count,
                        'price' => $new_count * $product->price
                    ]]);
                }
            }
        }
        return response(['result' => false, 'data' => ['error' => 'خطا در پردازش. مجددا سعی کنید']]);
    }

    public function getCart(){
        $data = Cart::where('user_id', 1)->with(['product'])->get();
        return response(['result' => true, 'data' => ['data' => $data]]);
    }

    public function getAddresses(){
        $data = Market_address::where('user_id', 1)->get();
        return response(['result' => true, 'data' => ['data' => $data]]);
    }

    public function getAddressById($address_id){
        $data = Market_address::where('user_id', 1)->where('id', $address_id)->first();
        return response(['result' => true, 'data' => ['data' => $data]]);
    }

    public function addAddress(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'address' => 'required|string'
        ]);
        if ($validator->fails()) {
            return response(['result' => false, 'data' => ['errors' => $validator->errors()]]);
        }

        $data = [
            'user_id' => 1,
            'title' => $request->title,
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'mobile' => $request->mobile,
        ];
        $data = Market_address::create($data);
        return response(['result' => true, 'data' => $data]);
    }

    public function createInvoice(Request $request){
        $validator = Validator::make($request->all(), [
            'address_id' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response(['result' => false, 'data' => ['errors' => $validator->errors()]]);
        }

        $data = [
            'user_id' => 1,
            'address_id' => $request->address_id,
        ];
        $data = Invoice::create($data);


        $cart = Cart::where('user_id', 1)->with(['product'])->get();
        $invoice_product = [];
        foreach ($cart as $key => $value) {
            $invoice_product[] = [
                'invoice_id' => $data->id,
                'product_id' => $value->id,
                'count' => $value->count,
                'price' => $value->product->price
            ];
        }
        Invoice_products::insert($invoice_product);
        Cart::where('user_id', 1)->delete();

        return response(['result' => true, 'data' => 'Invoice Created.']);
    }

    public function getInvoices(){
        $data = Invoice::where('user_id', 1)->with(['user', 'address', 'products', 'products.product'])->get();
        return response(['result' => true, 'data' => ['data' => $data]]);
    }

    public function getInvoiceById($invoice_id){
        $data = Invoice::where('user_id', 1)->where('id', $invoice_id)->with(['user', 'address', 'products', 'products.product'])->get();
        return response(['result' => true, 'data' => ['data' => $data]]);
    }
}
