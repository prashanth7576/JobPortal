<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LogoutController extends Controller
{
    public function store()
    {
       
        
        auth()->logout();

        return redirect()->route('login');

    }
}