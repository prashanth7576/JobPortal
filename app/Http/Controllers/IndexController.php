<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class IndexController extends Controller
{
    public function index()
    {
        

       $data = Job::all();
       
       $count = Job::count();

       
       
       return view('index' , ['data' => $data, 'count' => $count]);
       
    }

}
