<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Jobtype;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

use Validator;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      


        $data = Job::all();
        
        $count = Job::count();
        return view('jobs.index', ['data' => $data, 'count' => $count]);



        $jobs = Job::latest()->paginate(5);

        return view('jobs.index', compact('jobs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'JobId' => 'required',
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

        Job::create($request->all());

        return redirect()->route('jobs.index')
        ->withSuccessMessage('Job Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {

       
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $request->validate([

            'JobId' => 'required',
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

        $job->update($request->all());

        return redirect()->route('jobs.index')
        ->withSuccessMessage('Job Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index')
        ->withSuccessMessage('Job Deleted Successfully');
    }
}
