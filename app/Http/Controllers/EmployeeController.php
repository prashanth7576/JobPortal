<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('employee');
    }

    public function store(Request $request){
        $employee = new Employee();

        $employee->name=$request->input('name');
        
        $employee->name=$request->input('email');
        
        $employee->name=$request->input('post');
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/employee/', $filename);
            $employee->image = $filename;
        }else{
            return $request;
            $employee->image = '';
        }
        $employee->save();

        return view('employee')->with('employee', $employee);
    }

    public function display(){
        $employees = Employee::all();
        return view('employeeform')->with('employees', $employees);
    }
}
