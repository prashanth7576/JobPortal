<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
Use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PasswordController extends Controller
{

    public function index()
    {
      
         return view('change-password');
    }

    public function changepassword(){
        return view('change-password');
    }

    public function updatepassword(Request $request){

        

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
  
        if(!Hash::check($request->old_password,auth()->user()->password)){
            return back()->witherrorMessage('Old Password Doesnot Matched');
        }
        
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)

        ]);
        return redirect('/login')->withSuccessMessage('Password Changed Successfully');
    }
    
}
