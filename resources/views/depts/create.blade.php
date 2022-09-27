@extends('layouts.app')


@section('content')
<html>
    <head></head>
<body>
<div class="main_container" >

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div >
            <h2>Create Employee</h2>
        </div>
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

<form action="{{ route('depts.store') }}" method="POST">
    @csrf


     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-left: 15%">
            
        <div class="mt-4">
                <x-label for="deptshortname" :value="__('deptshortname')" />
        
                <x-input id="deptshortname" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="deptshortname" :value="old('deptshortname')"   required />
            </div>

            <div class="mt-4">
                <x-label for="deptname" :value="__('deptname')" />
        
                <x-input id="deptname" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="deptname" :value="old('deptname')"   required />
            </div>
        
        
            <div class="mt-4">
                <x-label for="Remarks" :value="__('Remarks')" />
        
                <x-input id="Remarks" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="Remarks" :value="old('Remarks')"   required />
            </div>

           
            
           
            <div class="flex items-center justify-end mt-4">
               
        
               
              <input type="submit" value="Save" class="btn btn-success active" style="width: 500px; "></br>
        </div>
    </div>

</form>
</div>
</div>



</body>
</html>

@endsection