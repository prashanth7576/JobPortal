@extends('layouts.app')


@section('content')

<html>
    <head></head>

    <body style="background-color:whitesmoke">

    <div class="main_container" style="margin-top: 8%">

     
        <br>



       <div style="margin-left: 7%;width:380px; ">

        <div class="flex">
            <a href="{{url('display')}}" style="margin-bottom: 7%;">  <i class="fa fa-angle-left" aria-hidden="true" style="font-size:30px;" ></i> </a> 
            </div>
           <div class="card" style="width: 20rem">

            
        <h1 style="margin-left: 5%; font-size:20px; margin-bottom:1%; color:rgb(170, 165, 165)"> {{ $job->JobTitle }}</h1>
        
        <h1 style="font-size: 25px; margin-left:2%; "> {{ $job->JobRole }}</h1>
       


           </div>

        <br>
        <div class="card" >
           



            <div class="card-header">
                <h1 style="color: rgb(112, 112, 112); margin-bottom:1%;font-size:17px">Job Title</h1>
                
                <h1 style="font-size:17px">{{ $job->JobRole }}</h1>

            </div>

            <div class="card-body">

            <h1 style="color: rgb(112, 112, 112); margin-bottom:1%;font-size:17px">Job Description</h1>

              
                <h1 style="font-size:17px">{{ $job->Description }}</h1>
            </div>       
        </div>

        <br>
        <br>

        <div class="card" >
           

            <div class="card-header">
                <h1 style="color: rgb(112, 112, 112); margin-bottom:1%;font-size:17px">Job Details</h1>
                
                

            </div>

            <div class="card-body">

            


                <h1 style="margin-bottom: 1%; color:rgb(80, 118, 241);font-size:17px">Department </h1> <h1><span>  {{ $job->DeptName }}  </span> </h1> <br>
               
                <h1 style="margin-bottom: 1%; color:rgb(80, 118, 241);font-size:17px"> Annual Salary  </h1> <h1>  <span> {{$job->AnnualSalary}} </span> </h1> <br>
                
                <h1 style="margin-bottom: 1%; color:rgb(80, 118, 241);font-size:17px"> Created By  </h1> <h1> <span> {{ $job->CreatedBy }} </span> </h1>
                <br>
                <h1 style="margin-bottom: 1%; color:rgb(80, 118, 241);font-size:17px"> Creation Date  </h1> <h1> <span> {{ $job->CreatedDate }} </span> </h1>
                <br>
                <h1 style="margin-bottom: 1%; color:rgb(80, 118, 241);font-size:17px"> Close Date  </h1> <h1> <span> {{ $job->CloseDate }} </span> </h1>
                <br>
                <h1 style="margin-bottom: 1%; color:rgb(80, 118, 241);font-size:17px"> Apply Link  </h1> <h1> <span> <a href="{{route('apply')}}"> {{ $job->ApplyLink }} </a> </span> </h1>
        

     
            </div>        
        </div>
    </div>
</div>

        
    </body>
</html>


@endsection
