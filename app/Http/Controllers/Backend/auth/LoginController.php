<?php

namespace App\Http\Controllers\Backend\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('Backend.auth.login');
    }

    public function addlogin(Request $request){
        $credentials=[
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ];
        $login = Auth::attempt($credentials);

        if ($login){
            return redirect('admin/dashboard');
        }else{
            Session::flash('failed','Login Failed');
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
