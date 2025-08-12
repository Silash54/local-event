<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function loginPost(Request $request)
    {
        $validatedData=Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if($validatedData->fails())
        {
            return response()->json($request->all(),[
                'status'=>false,
                'errors'=>$validatedData->errors()
            ]);
        }
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]));
        {
            
        }

    }
    public function register()
    {
        return view('auth.register');
    }
    public function registerPost(Request $request)
    {
        //dd($request);
        $validateData = Validator::make($request->all(), [
            'username' => 'required|max:30',
            'email' => 'required|email',
            'contact' => 'required|numeric',
            'password' => 'required|min:5'
        ]);
        if ($validateData->fails()) {
            return response()->json($validateData->errors(), 422);
        }
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('login');
    }
}
