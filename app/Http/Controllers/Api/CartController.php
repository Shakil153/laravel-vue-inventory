<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CartController extends Controller
{
    public function addtocart($id){
        $check=DB::table('pos')->where('pro_id',$id)->first();
        if($check){
            DB::table('pos')->where('pro_id',$id)->increment('pro_quantity');
            $product = DB::table('pos')->where('pro_id',$id)->first();
            $subtotal=$product->pro_quantity*$product->product_price;
            DB::table('pos')->where('pro_id',$id)->update([ 'sub_total'=>$subtotal ]);
        }else{
            $productData= DB::table('products')->where('id',$id)->first();
            $data = array();
            $data['pro_id'] = $id;
            $data['pro_name'] = $productData->product_name;
            $data['pro_quantity'] = 1;
            $data['product_price'] = $productData->selling_price;
            $data['sub_total'] = $productData->selling_price;

            DB::table('pos')->insert($data);
        }
        
    }

    public function cartProduct(){
        $cartproduct=DB::table('pos')->get();
        return response()->json($cartproduct);
    }

    public function deleteCartProduct($id)
    {
         $cartproduct=DB::table('pos')->where('id',$id)->delete();
    }
    public function incrementQuantity($id){
        DB::table('pos')->where('pro_id',$id)->increment('pro_quantity');
        $product = DB::table('pos')->where('pro_id',$id)->first();
        $subtotal=$product->pro_quantity*$product->product_price;
        DB::table('pos')->where('pro_id',$id)->update([ 'sub_total'=>$subtotal ]);
    }
    public function decrementQuantity($id){
        DB::table('pos')->where('pro_id',$id)->decrement('pro_quantity');
        $product = DB::table('pos')->where('pro_id',$id)->first();
        $subtotal=$product->pro_quantity*$product->product_price;
        DB::table('pos')->where('pro_id',$id)->update([ 'sub_total'=>$subtotal ]);
    }
    public function vat(){
        $vat=DB::table('extra')->first();
        return response()->json($vat);
    }
}
