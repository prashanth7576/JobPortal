@extends('layouts.app')


@section('content')
<div class="main_container">
    <br>
    <br>
    <br>

<div class="row">
    
    <div class="col-md-12 ">
       
        <div >
            <a class="btn btn-primary" href="{{ route('jobs.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($message = Session::get('success_message'))
<div style="width: 700px; margin-left:350px ">
    <p>{{ $message }}</p>
</div>
@endif

<div class="flex justify-center">
   
<form action="{{ route('save') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-left: 15%">
            
        
        
            <div class="mt-4" style="margin-bottom: 4%">
                <x-label for="JobTitle" :value="__('JobTitle')" style="font-size: 17px"/>
        
                <x-input id="JobTitle" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="JobTitle" :value="old('JobTitle')" required />
            </div>

            <div class="mt-4" style="margin-bottom: 4%">
                <x-label for="JobRole" :value="__('JobRole')" style="font-size: 17px"/>
        
                <x-input id="JobRole" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="JobRole" :value="old('JobRole')" required />
            </div>

            <div style="margin-bottom: 4%">
                <x-label for="Description" :value="__('Description')" style="font-size: 17px"/>
        
                <x-input id="Description" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Description" :value="old('Description')" required autofocus />
            </div>
        
        
            <div class="mt-4" style="margin-bottom: 4%">
                <x-label for="Positions" :value="__('Positions')" style="font-size: 17px"/>
        
                <x-input id="Positions" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="Positions" :value="old('Positions')" required />
            </div>
            <div style="margin-bottom: 4%">
                <x-label for="Location" :value="__('Location')" style="font-size: 17px"/>
        
                <x-input id="Location" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Location" :value="old('Location')" required autofocus />
            </div>
        
        
            <div class="mt-4" style="margin-bottom: 4%">
                <x-label for="AnnualSalary" :value="__('AnnualSalary')" style="font-size: 17px"/>
        
                <x-input id="AnnualSalary" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="AnnualSalary" :value="old('AnnualSalary')" required />
            </div>
            <div style="margin-bottom: 4%">
                <x-label for="deptshortname" :value="__('deptshortname')" style="font-size: 17px"/>
        
                <x-input id="deptshortname" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="deptshortname" :value="old('deptshortname')" required autofocus />
            </div>
        
        
         
            <div style="margin-bottom: 4%">
                <x-label for="Active" :value="__('Active')" style="font-size: 17px"/>
        
                <x-input id="Active" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="Active" :value="old('Active')" required autofocus />
            </div>
        
        
            <div class="mt-4" style="margin-bottom: 4%">
                <x-label for="CreatedDate" :value="__('CreatedDate')" style="font-size: 17px"/>
        
                <x-input id="CreatedDate" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="date" name="CreatedDate" :value="old('CreatedDate')" required />
            </div>
            <div style="margin-bottom: 4%">
                <x-label for="CreatedBy" :value="__('CreatedBy')" style="font-size: 17px"/>
        
                <x-input id="CreatedBy" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="CreatedBy" :value="old('CreatedBy')" required autofocus />
            </div>
        
            <div style="margin-bottom: 4%">
                <x-label for="Apply_Link" :value="__('ApplyLink')" style="font-size: 17px"/>
        
                <x-input id="ApplyLink" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="ApplyLink" :value="old('ApplyLink')" required autofocus />
            </div>
            
        
        
            <div class="mt-4" style="margin-bottom: 4%">
                <x-label for="CloseDate" :value="__('CloseDate')"  style="font-size: 17px"/>
        
                <x-input id="CloseDate" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="date" name="CloseDate" :value="old('CloseDate')" required />
            </div>
        
        
        
            <div class="flex items-center justify-end mt-4">
               
        
               
              <input type="submit" value="Save" class="btn btn-success active" style="width: 500px; "></br>
        </div>
    </div>
   
</form>
</div>

</div>
</div>
</div>




@endsection