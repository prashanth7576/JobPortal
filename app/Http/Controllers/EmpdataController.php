<?php

namespace App\Http\Controllers;

use App\Models\Empdata;
use Illuminate\Http\Request;

class EmpdataController extends Controller
{
    public function index()
    {
        

       $data = Empdata::all();
       
       $count = Empdata::count();

       
       
       return view('empdata' , ['data' => $data, 'count' => $count]);
       
    }
}
