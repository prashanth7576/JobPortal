@extends('layouts.app')


@section('content')

<div class="main_container" >

<div class="row">
    <div class="col-lg-12 " style="margin-left: 7%;margin-top:2%">
       
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

<form action="{{ route('emps.update',$emp->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class=" col-md-12" style="margin-left: 15%">
            
        <div class="mt-4" style="margin-bottom: 4%">
                <x-label for="Employee_Name" :value="__('Employee_Name')" style="font-size: 15px"/>
        
                <x-input id="Employee_Name" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="Employee_Name" value="{{$emp->Employee_Name}}"   required />
            </div>

            <div class="mt-4" style="margin-bottom: 4%">
                <x-label for="Position" :value="__('Position')" style="font-size: 15px"/>
        
                <x-input id="Position" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="Position" value="{{$emp->Position}}"   required />
            </div>
        
        
            <div class="mt-4" style="margin-bottom: 4%">
                <x-label for="Email" :value="__('Email')" style="font-size: 15px"/>
        
                <x-input id="Email" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="Email" value="{{$emp->Email}}"   required />
            </div>

            <div style="margin-bottom: 4%">
                <x-label for="Mobile_Num" :value="__('Mobile_Num')" style="font-size: 15px"/>
        
                <x-input id="Mobile_Num" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Mobile_Num" value="{{$emp->Mobile_Num}}" required autofocus />
            </div>
        
        
            <div class="mt-4" style="margin-bottom: 4%">
                <x-label for="Team" :value="__('Team')" style="font-size: 15px"/>
        
                <x-input id="Team" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="Team" value="{{$emp->Team}}" required />
            </div>
            <div style="margin-bottom: 4%">
                <x-label for="Date" :value="__('Date')" style="font-size: 15px"/>
        
                <x-input id="Date" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Date" value="{{$emp->Date}}" required autofocus />
            </div>
        
        
            <div class="mt-4" style="margin-bottom: 4%">
                <x-label for="Status" :value="__('Status')" style="font-size: 15px"/>
        
                <x-input id="Status" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="Status" value="{{$emp->Status}}" required />
            </div>
            <div style="margin-bottom: 4%">
                <x-label for="Profile_url" :value="__('Profile_url')" style="font-size: 15px"/>
        
                <x-input id="Profile_url" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="Profile_url" value="{{$emp->Profile_url}}" required autofocus />
            </div>

            <div style="margin-bottom: 4%">
                <x-label for="Remarks" :value="__('Remarks')" style="font-size: 15px"/>
        
                <x-input id="Remarks" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="Remarks" value="{{$emp->Remarks}}" required autofocus />
            </div>
        
        
        
            
           
            <div class="flex items-center justify-end mt-4">
               
        
               
              <input type="submit" value="Save" class="btn btn-success active" style="width: 500px; "></br>
        </div>
    </div>

</form>
</div>
</div>



@endsection