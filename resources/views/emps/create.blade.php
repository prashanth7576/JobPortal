@extends('layouts.app')


@section('content')

<div class="main_container" style=" width: (100% - 70px);
margin-left: %; ">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div >
            <h2>Create Employee</h2>
        </div>
        <div >
            <a class="btn btn-primary" href="{{ route('emps.index') }}"> Back</a>
         
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

<form action="{{ route('emps.store') }}" method="POST">
    @csrf


     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-left: 15%">
            
        <div class="mt-4">
                <x-label for="Employee_Name" :value="__('Employee_Name')" />
        
                <x-input id="Employee_Name" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="Employee_Name" :value="old('Employee_Name')"   required />
            </div>

            <div class="mt-4">
                <x-label for="Position" :value="__('Position')" />
        
                <x-input id="Position" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="Position" :value="old('Position')"   required />
            </div>
        
        
            <div class="mt-4">
                <x-label for="Email" :value="__('Email')" />
        
                <x-input id="Email" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="Email" :value="old('Email')"   required />
            </div>

            <div>
                <x-label for="Mobile_Num" :value="__('Mobile_Num')" />
        
                <x-input id="Mobile_Num" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Mobile_Num" :value="old('Mobile_Num')" required autofocus />
            </div>
        
        
            <div class="mt-4">
                <x-label for="Team" :value="__('Team')" />
        
                <x-input id="Team" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="Team" :value="old('Team')" required />
            </div>
            <div>
                <x-label for="Date" :value="__('Date')" />
        
                <x-input id="Date" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Date" :value="old('Date')" required autofocus />
            </div>
        
        
            <div class="mt-4">
                <x-label for="Status" :value="__('Status')" />
        
                <x-input id="Status" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="Status" :value="old('Status')" required />
            </div>
            <div>
                <x-label for="Profile_url" :value="__('Profile_url')" />
        
                <x-input id="Profile_url" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="Profile_url" :value="old('Profile_url')" required autofocus />
            </div>
            <div>
                <x-label for="Remarks" :value="__('Remarks')" />
        
                <x-input id="Remarks" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="Remarks" :value="old('Remarks')" required autofocus />
            </div>
        
        
            
           
            <div class="flex items-center justify-end mt-4">
               
        
               
              <input type="submit" value="Save" class="btn btn-success active" style="width: 500px; "></br>
        </div>
    </div>

</form>
</div>
</div>



@endsection