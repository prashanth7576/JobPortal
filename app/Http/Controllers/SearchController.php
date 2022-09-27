<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Search;
use App\Models\Job;
use DB;
use Illuminate\support\Facades\Input;

class SearchController extends Controller
{
    public function index(Request $request)
    {
     
        $count = Search::count();
    $data = Search::where([
        ['JobTitle' , '!=' , Null],
        [function ($query) use ($request){
            if(($term = $request->term)){
                $query->orWhere('JobTitle',  'LIKE' , '%' . $term . '%')->get();
                $query->orWhere('JobRole',  'LIKE' , '%' . $term . '%')->get();

            }
        }]
    ])

           ->orderBy("id" , "desc")
           ->paginate(10);


           


         
           return view('display', ['data' => $data , 'count' => $count])
                 ->with('i', (request()->input('page', 1 ) - 1) * 5);


                 $value = Job::where('JobRole', Input::get('JobRole'))->get();
                 return view('display', ['value' => $value ]);
                 
}


}
