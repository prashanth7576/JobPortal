<?php

namespace App\Http\Controllers;

use App\Models\Add;
use Illuminate\Http\Request;



class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Add::all();

        return view('project.create',['data' => $data, ]);



        $projects = Add::latest()->paginate(5);

        return view('project.create', compact('projects'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
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

            
            'project_id' => 'required',
            'project_name' => 'required',
            
            
        ]);

        Add::create($request->all());

        return redirect('calender')
            ->with('success', ' created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function show(Add $add)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function edit(Add $add)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Add $add)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function destroy(Add $add)
    {
        //
    }
}