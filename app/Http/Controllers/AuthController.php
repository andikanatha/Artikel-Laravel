<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register/index');
    }

    public function register_action(Request $request)
    {
        $request -> validate(
           [ 
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            ]
        );
        $Hashpassword = Hash::make($request->password);
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $Hashpassword,
        ]);
        $user->save();
        return redirect("login")->withSuccess('You have signed-in');
        
    }

    public function login()
    {
        return view('login/index');
    }

    public function login_action(Request $request)
    {
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];


        if(Auth::attempt($credentials)) {
            return redirect()->intended('home');       
        }

  
        return back()->with('loginEror', 'Login Gagal');
        
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('home');
    }

    public function home ()
    {
        return view('layout/main');
    }


}
