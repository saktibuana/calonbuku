<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products =Products::where('user_id',Auth::id())->get();
        return view('products.index',['title'=>'Products'],compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =Categories::all();
        return view('products.create',['title'=>'Create new product'],compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'=>'required',
            'name'=>'required',
            'price'=>'required|numeric',
            'count'=>'required|numeric',
            'description'=>'required',
            'cover'=>'required'
        ]);
        $cover ='cover'.time().'.'.$request->cover->extension();
        $request->cover->move(public_path('src/cover'),$cover);
        DB::beginTransaction();
        try {
            Products::create([
                'category_id'=>$request->category_id,
                'name'=>$request->name,
                'slug'=>Str::slug($request->name),
                'price'=>$request->price,
                'count'=>$request->count,
                'description'=>$request->description,
                'cover'=>'src/cover/'.$cover,
                'user_id'=>Auth::id()
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            
        }
        return back()->with('success','Product hasbeen successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
