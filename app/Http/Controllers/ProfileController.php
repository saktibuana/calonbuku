<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index',['title'=>'Profile']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $request->validate([
            'name'=>'required|max:255',
            'age'=>'required|numeric',
            'gender'=>'required|max:255',
            'contact_number'=>'required|numeric',
            'address'=>'required'
        ]);
        DB::beginTransaction();
        try {
            $user = User::findOrFail($id);
            $user->name=$request->name;
            $user->age=$request->age;
            $user->gender=$request->gender;
            $user->contact_number = $request->contact_number;
            $user->address=$request->address;
            $user->save();
            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
        }
        return back()->with('success','Account hasbeen update!');
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

    public function update_profile(Request $request, $id){
        $request->validate([
            'profile_foto'=>'required|mimes:jpg,jpeg,png,svg'
        ]);
        
        DB::beginTransaction();
        try {
            $ext =$request->profile_foto->extension();
            $name='profile'.time().'.'.$ext;
            $path ='src/profile/'.$name;
            $user =User::findOrFail($id);
            $user->profile_foto=$path;
            $user->save();
            $request->profile_foto->move(public_path('src/profile/'),$name);
            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
        }
        return back()->with('success','Photo Profile hasbeen update!');
    }
}
