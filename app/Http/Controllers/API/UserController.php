<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=User::with('role')->get();
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function login(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $auth = Auth::user();
            $success['token']=$auth->createToken('auth_token')->plainTextToken;
            $success['name']=$auth->name;

            return response()->json([
                'success'=>true,
                'message'=>'Login berhasil',
                'data'=>$success
            ]);
        }else{
            return response()->json([
                'success'=>false,
                'message'=>'Cek email dan password anda!',
                'data'=>'null'
            ]);
        }
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password'=>'required',
            'confirm_password'=>'required|same:password'
        ]);

        if($validator->fails()){
            return response()->json([
                'success'=>false,
                'message'=>'Ada kesalahan',
                'data'=>$validator->errors()
            ]);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['token'] = $user->createToken('auth_token')->plainTextToken;
        $success['name']=$user->name;

        return response()->json([
            'success'=>true,
            'message'=>'Berhasil Register',
            'data'=>$success
        ]);
    }
}
