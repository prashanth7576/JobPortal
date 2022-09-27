@extends('layouts.app')


@section('content')

<div class="main_container" style=" width: (100% - 70px);
margin-left: %; ">


        

        <div class="row">
           

            
            <div class="col-md-9">


<div class="card" style="width: 600px;height:300px">

  <h1>{{$employe->Employee_Name}}
    
  </h1>

    <div style="display:flex">

      <h3 class="text-center" style="border:solid #01DFA5; margin-right:15%; padding-top:4%; padding-bottom:4%; color:#01DFA5; border-radius:2px; font-size:15px"> <b>{{ $employe->Status }} </b> </h3>

      <h4 class="text-muted">{{$employe->Position}}</h4>
   
    
    </div>

    <div style="display: flex; margin-top:5%">

      <h4 class="text-muted">Department</h4>
      <h4 style="margin-left: 20%">{{$employe->Team}}</h4>
      <h4 style="margin-left: 20%"><i class="	fa fa-envelope">  {{ $employe->Email }}</i> </h4>


    </div>

    <div style="display: flex;margin-top:5%">

      <h4 class="text-muted">Department</h4>
      <h4 style="margin-left: 20%">{{$employe->Team}}</h4>
      <h4 style="margin-left: 20%"><i class="	fa fa-envelope">  {{ $employe->Email }}</i> </h4>


    </div>

    </div>

            </div>
        </div>
      </div>
        @endsection