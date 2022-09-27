<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class LoginController extends Controller
{
    public function index()
    {
      
       
         return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('email','password'))){
           return back()->witherrorMessage('Invalid Details');   
        }
        return redirect('/')->withSuccessMessage('Login Successfull');
    }        
}