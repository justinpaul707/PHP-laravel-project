<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProfile;
class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
        $messages = array(
            'phone_no.required' => 'The Phone number field is required.',
        );
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            // 'password' => 'required|string|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/|regex:/[@$!%*#?&]|min:3/',
            'password' => 'required|min:6',
            'confirm_password'=>'required|same:password',
            'phone_no'=>'required',
            'gender'=>'required',
            'age'=>'required',
        ],$messages);
        $user = User::create([
            'name' => $request->input('name'),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
        ]);
        
        UserProfile::create([
            'phone_no' => $request->input('phone_no'),
            'gender'=> $request->input('gender'),
            'user_id'=>$user->id,
            'age'=>$request->input('age'),
        ]);
        
        session()->flash('message', 'Your account is created');
        return redirect()->route('login');
    }

    
    
}
