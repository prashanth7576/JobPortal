<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\helpers\helper;
use App\Models\Student;

use Validator;

class StudentController extends Controller
{
    function index(){
        $data = ['students'=>Student::all()];
        return view('jobs.create',$data);
    }
    function save(Request $request){
        /** Validate name field */
        $request->validate([
            
            'JobTitle' => 'required',
            'JobRole' => 'required',
            'Description' => 'required',
            'Positions' => 'required',
            'Location' => 'required',
            'AnnualSalary' => 'required',
            'deptshortname' => 'required',
            'Active' => 'required',
            'CreatedDate' => 'required',
            'CreatedBy' => 'required',
            'ApplyLink' => 'required',
            'CloseDate' => 'required',

        ]);

        

        $JobTitle = $request->JobTitle;
        $JobRole = $request->JobRole;
        $Description = $request->Description;
        $Positions = $request->Positions;
        $Location = $request->Location;
        $AnnualSalary = $request->AnnualSalary;
        $deptshortname = $request->deptshortname;
        $Active = $request->Active;
        $CreatedDate = $request->CreatedDate;
        $CreatedBy = $request->CreatedBy;
        $ApplyLink = $request->ApplyLink;
        $CloseDate = $request->CloseDate;
        
        
        $JobId = helper::IDGenerator(new Student, 'JobId', 2, 'DV22'); /** Generate id */
        $q = new Student;
        $q->JobId = $JobId;
        $q->JobTitle = $JobTitle;
        $q->JobRole = $JobRole;
        $q->Description = $Description;
        $q->Positions = $Positions;
        $q->Location = $Location;
        $q->AnnualSalary = $AnnualSalary;
        $q->deptshortname = $deptshortname;
        $q->Active = $Active;
        $q->CreatedDate = $CreatedDate;
        $q->CreatedBy = $CreatedBy;
        $q->ApplyLink = $ApplyLink;
        $q->CloseDate = $CloseDate;
        $save =  $q->save();

        if($save){
            return back()->with('success','New Job has been added');
        }else{
            return back()->with('failed','Something went wrong');
        }


    }
}
