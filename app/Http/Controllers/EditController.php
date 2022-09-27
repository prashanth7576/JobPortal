<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class EditController extends Controller
{
    public function index()
    {
        

       $data = Job::all();
       
       $count = Job::count();

       
       
       return view('edit' , ['data' => $data, 'count' => $count]);
       
       
    }
}
