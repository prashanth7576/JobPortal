<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Dept;
use App\Models\Emp;
use App\Models\User;
use App\Models\Item;
use RealRashid\SweetAlert\Facades\Alert;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

   
       

        $data = Event::all();
        $dept = Dept::all();
        $emp = Emp::query()->take(5)->get();
        $value = User::all();

        $count = Emp::count();

        $NewApplied = Item::where('status', 0)
			
			->get()->count();
		$Screening = Item::where('status', 1)
			
			->get()->count();
		$Interview = Item::where('status', 2)
			
			->get()->count();

       $Hired = Item::where('status', 3)
			
			->get()->count();  
        
        return view('dashboard', ['data' => $data, 'dept'=>$dept, 'emp' => $emp, 'value' => $value, 'count' => $count,'NewApplied' => $NewApplied, 'Screening'=>$Screening, 'Interview' => $Interview, 'Hired' => $Hired,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
