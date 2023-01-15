<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(){
        $cart = User::where('id',Auth::id())->with('cart')->withCount('cart')->get();
        return $cart;
        return view('cart.index',['title'=>'Cart']);
    }

    public function add_to_cart(Request $request){
        $request->validate([
            'count'=>'required|gte:1|numeric',
            'product_id'=>'required'
        ]);
        DB::beginTransaction();
        try {
            Cart::create([
                'product_id'=>$request->product_id,
                'user_id'=>Auth::id(),
                'count'=>$request->count
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
        }
        return back()->with('success','Product successfully added to cart, please check cart');
    }
}
