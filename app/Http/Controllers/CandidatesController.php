<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class CandidatesController extends Controller
{
    public function index()
    {
        

       $data = Applicant::all();
       
       
       
       
       return view('candidates' , ['data' => $data ]);
    }
}
