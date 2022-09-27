<?php

namespace App\Http\Controllers;

use App\Models\Dept;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use Validator;
use RealRashid\SweetAlert\Facades\Alert;


class DeptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       
        $data = Dept::all();

       
        
        return view('depts.index' , ['data' => $data]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('depts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Dept $dept)
    {
        $request->validate([

            
            'deptshortname' => 'required',
            'deptname' => 'required',
            'Remarks' => 'required'
        ]);

        $dept->create($request->all());

        return redirect()->route('depts.index')
        ->withSuccessMessage('Department added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function show(Dept $dept)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function edit(Dept $dept)
    {
        return view('depts.edit', compact('dept'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dept $dept)
    {

        $request->validate([

            
            'deptshortname' => 'required',
            'deptname' => 'required',
            'Remarks' => 'required'
        ]);

        $dept->update($request->all());

        return redirect()->route('depts.index')
        ->withSuccessMessage('Department edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dept $dept)
    {
        $dept->delete();

        return redirect()->route('depts.index')
        ->withSuccessMessage('Department deleted Successfully');
    }
}