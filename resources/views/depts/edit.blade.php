@extends('layouts.app')


@section('content')

<div class="main_container">

<div class="row">
    <div class="col-lg-12 " style="margin-left:7%">
       
        <div >
            <a class="btn btn-primary" href="{{ route('depts.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check input field code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class=" flex justify-center">

<form action="{{ route('depts.update',$dept->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-md-12" style="margin-left: 15%">
            
        <div class="mt-4" style="margin-bottom: 5%">
                <x-label for="deptshortname" :value="__('deptshortname')" style="font-size: 15px"/>
        
                <x-input id="deptshortname" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="deptshortname" value="{{$dept->deptshortname}}"   required />
            </div>

            <div class="mt-4" style="margin-bottom: 5%">
                <x-label for="deptname" :value="__('deptname')" style="font-size: 15px"/>
        
                <x-input id="deptname" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="deptname" value="{{$dept->deptname}}"   required />
            </div>
        
        
            <div class="mt-4" style="margin-bottom: 5%">
                <x-label for="Remarks" :value="__('Remarks')" style="font-size: 15px"/>
        
                <x-input id="Remarks" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="Remarks" value="{{$dept->Remarks}}"   required />
            </div>

            
           
            <div class="flex items-center justify-end mt-4">
               
        
               
              <input type="submit" value="Save" class="btn btn-success active" style="width: 500px; "></br>
        </div>
    </div>

</form>
</div>
</div>



@endsection