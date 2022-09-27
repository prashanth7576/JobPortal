<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Display;
use App\Models\Job;


class DisplayController extends Controller
{
    public function index(Request $request)
    {

        $data = Job::all();
       
       $count = Job::count();


  return view('display' , ['data' => $data, 'count' => $count]);


  
    }
}
