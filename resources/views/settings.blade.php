@extends('layouts.app')


@section('content')

<html>
    <head></head>
    <body style="background-color:white">

        <div class="main_container" style="margin-top: 10%">
            <br>
    
            <div style="width: 500px">
    
            <div class="row" >
                
                <div class="col-md-4 " style="background-color: #c6ecd9;margin-left:2%;padding:2%;width:500px">
                    
                        <a href="jobs" style="text-decoration:none; color:black;"> <b> <h1 style="margin-top: 2%;color:#047b6f;font-size:17px">  Update Jobs </h1> </b>  </a>
                    
            
                   
                </div>
            </div>
            <br>
            
            <div class="row">
                <div class="col-md-4" style="background-color: #c6ecd9;margin-left:2%;padding:2%;width:500px">
                <a href="emps" style="text-decoration:none; color:black;"> <b> <h1 style="margin-top: 2%;color:#09897d;font-size:17px"> Update Employees </h1> </b>  </a> 
                    
                </div>
            </div>
            <br>
            
            <div class="row">
                <div class="col-md-4 col-lg-4" style="background-color: #c6ecd9;margin-left:2%;padding:2%;width:500px">
                    <a href="depts" style="text-decoration:none; color:black;"> <b> <h1 style="margin-top: 2%;color:#09897d;font-size:17px"> Update Departments </h1> </b>  </a>
                    
                </div>
            </div>

            <h1> This is settings page </h1>
            <h2> this is user page</h2>
            <h2> Hello</h2>
            
            </div>

            
    
        </div>
        
    </body>
</html>

@endsection
