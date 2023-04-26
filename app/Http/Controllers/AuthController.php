<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserProfile;
class AuthController extends Controller
{
    public function loginview(){
        return view('auth.login');
    }
    
    function checkLogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|min:6'
     ]);

     $credentials = $request->only('email', 'password');
     if (Auth::attempt($credentials)) {
         return redirect()->intended('/')
                     ->withSuccess('successfully  logged in');
     }
     $request->session()->flash('alert-success', 'successfully login in');
     return redirect("login")->withSuccess('invalid email or password');
    }

    function logout()
    {
     Auth::logout();
     return redirect('login');
    }
}
