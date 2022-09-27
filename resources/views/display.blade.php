@extends('layouts.app')

@section('content')
<html>
    <head></head>

    <body style="background-color:white">

        <div >
            <div class="main_container">
         
              <br>
              <br>
              <br>
            
        
              <div class="container" style="display: flex" >
                  
                <div class="card" style="width: 20rem;">
        
                    <h3 style="font-size:25px;"> {{ $count }} Active Jobs</h3>
        
                </div>
        
                
                <div class="card" style="width: 30rem; display:flex; margin-left:3%">

                    <form action="{{ url('display') }}" method="GET">
                        <div class="form-group">
        
                    <label class="text-muted" for="Creation Date" style="font-size: 20px;margin-right:3%"> Sort by:  </label>
                    <select name="JobRole" class="form-control"  style="font-size:20px;">
                        @foreach ($value as $i)

                      
                        <option value="{{$i->JobRole}}">{{$i->JobRole}}</option>
                            
                        @endforeach
                      
                    </select>
                    <button type="submit" class="btn btn-primary active"> Submit</button>         
                </div>
                
                </form>

                </div>
        
                <div class="card" style="width: 25rem;display:flex">
                    <label class="text-muted" for="All Status" style="font-size: 20px;margin-right:3%"> Status:  </label>
        
                    <select style="font-size:20px;">
                        
                        <option> All Status <i class="fa fa-angle-down"
                                    style="font-size:30px;margin-top:0%"></i>
                        </option>
                    </select>
                </div>
        
        
              </div>
        
        
        
        
                <br>
                <br>
                
                <div class = 'container' style="  margin: auto; margin-top: 20px;">
                    <div class = 'row'>
                        @foreach ($data as $i)
                        <div class = 'col-md-3 col-lg-3' style="margin-bottom: 20px">
                          <div class="card" style="width: 20rem; height:300px; border-radius:15px; background-color:rgb(225, 222, 222)">
                          
                            <div class="card-header" style="background-color:#ff6666;height:25px; border-top-left-radius:15px">
                                <h5 style="float:right;padding-bottom:5%;padding-top:2%;padding-right:3%;font-size:17px">{{ $i->JobId }}</h5>
                            </div>
        
                            <h2 style="margin-left:3%;padding-top:5%;font-size:17px;font-weight:700;padding-left:5%"> <a
                                    href="{{ url('applicant') }}"><b>{{ $i->JobTitle }}</b> </a></h2>
        
                            <h5 style="margin-left:3%;padding-bottom:20%;padding-left:5%;margin-top:3%;font-size:17px">{{ $i->JobRole }}</h5>
        
                            
                            <div  style="display: flex;padding:10%; margin-left:10%; margin-right:10%;border-radius:10px">
                                <div class="vl" style="border-left: 2px solid green;height: 50px; margin-left:5%">
                                
                                
        
                                <h1 style="margin-left:25%;font-size:20px;"> <b>{{ $i->Positions }}</b>  </h1>
        
                                <h2 style="font-size:17px" > Total</h2>
                            
                                </div>
                                <div class="vl"
                                    style="border-left: 2px solid green;margin-left:30%;  height: 50px">
        
                                    <h1 style="margin-left:25%;font-size:20px;"> <b>{{ $i->Active }}</b>
                                    </h1>
        
                                    <h2 style="font-size:17px"> New</h2>
                                </div>
                            </div>
        
                            <div style="padding-bottom:2%; display:flex;margin-top:15%">
                                <button type="submit" style="margin-top:%;padding-left:5%"> <a href="jobs"> <i class="fa fa-plus" style="background-color:#F7DC6F;padding:8px;border-radius:10px"></i> </a> </button>
                                <h5 style="margin-top:3%; margin-left:3%;font-size:17px"> Add Job </h5>
        
        
                                <button style="margin-left:12%;padding-right:5%"><a
                                        href="{{ route('jobs.show', $i->id) }}">
                                        <h5 style="font-size:17px"> Details <h5>
                                    </a></button>
        
        
        
                            </div>
                             
                            </div>
                        </div>
        
                        @endforeach
        
        
                       
                    </div>
                </div>
                
            </div>
        </div>


        
        
    </body>
</html>


@endsection
