<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserProfile;
use App\Models\User;

class ProfileController extends Controller
{
    public function index() {
        $user_id =Auth::user()->id ;
        $user=User::find($user_id);
        $user_profile=UserProfile::where('user_id', $user_id)->get();
        $data=['user'=>$user,'user_profile'=>$user_profile[0]];
        return view('profile.profile_view',compact('data'));
    }
    public function edit() {
        $user_id =Auth::user()->id ;
        $user=User::find($user_id);
        $user_profile=UserProfile::where('user_id', $user_id)->get();
        $data=['user'=>$user,'user_profile'=>$user_profile[0]];
        
        return view('profile.edit',compact('data'));
    }
    public function update(Request $request) {
        $user_id =Auth::user()->id ;
        $validator=$request->validate([
            'email' => 'required|email',
            'phone_no'=>'required|max:11',
            'age'=>'required',
            'gender'=>'required',
            'profile_img'=>'required',
        ]);
        if ($request->file('profile_img')) {   
            if ($image = $request->file('profile_img')) {
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $avatarpath = storage_path('app' . DIRECTORY_SEPARATOR . 'public/images/user-image/');
                $image->move($avatarpath, $profileImage);
            }
        }
        $user=User::find($user_id)->update(['email'=>$request->input('email')]);
        $user_profile=UserProfile::where('user_id', $user_id)->update([
        'phone_no'=> $request->post('phone_no'),
        'age'=> $request->post('age'),
        'gender'=> $request->post('gender'),
        'profile_img'=>$profileImage
        ]);
        return redirect()->intended('/')->with('status', 'Profile Updated Successfully');
    }
}
