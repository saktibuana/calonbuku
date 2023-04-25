<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(){
        $carts = User::where('id',Auth::id())->with(['cart','cart.products','cart.products.users'])->withCount('cart')->get();
        // return $carts;
        if($carts[0]->cart_count === 0){
            return redirect()->back()->withErrors('Tidak ada barang');
        }
        return view('cart.index',['title'=>'Cart'],compact('carts'));
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

    public function destroy($id){
        Cart::destroy($id);
        $carts = User::where('id',Auth::id())->with(['cart','cart.products','cart.products.users'])->withCount('cart')->get();
        if($carts[0]->cart_count === 0){
            return redirect('/');
        }
        return back();
    }

    public function load_cart(Request $request){
        $carts = User::where('id',Auth::id())->with(['cart','cart.products','cart.products.users'])->withCount('cart')->get();

        $product = [];
        foreach($carts[0]->cart as $cart){
            $product[]=[
                'id_cart'=>$cart->id,
                'qty'=>$cart->count,
                'price'=>$cart->products[0]->price,
                'title'=>$cart->products[0]->name,
                'penulis'=>$cart->products[0]->users->name,
                'cover'=>$cart->products[0]->cover,
            ];
        }
        // return $product;
        $request->session()->put('cart', $product);
        return view('cart.load',compact('carts'));
    }

    public function tambah_count_cart(Request $request){
        $id = $request->id;
        $cart =Cart::findOrFail($id);
        $cart->count+=1;
        $cart->save();
        return response()->json('sukses');
    }
    public function kurang_count_cart(Request $request){
        $id = $request->id;
        $cart =Cart::findOrFail($id);
        if($cart->count == 1){
            return false;
        }else{
            $cart->count-=1;
            $cart->save();
        }
        return response()->json('sukses');
    }

    public function checkout(){
        return view('cart.checkout',['title'=>'Checkout']);
    }

    public function load_checkout(Request $request){
        $data =Session::get('cart');
        return view('cart.load_checkout',compact('data'));
    }
}
