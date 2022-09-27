
    @extends('layouts.app')





@section('content')<br>

    <div class=" flex justify-center">

<div class="card ">
    <h1 class="card-header" style="font-size: 20px"> ADD JOB</h1>
    <div class="card-body">
        
        <form action="{{ url('addjob') }}" method="post">
          {!! csrf_field() !!}
          <div>
            <x-label for="JobId" :value="__('JobId')" />
    
            <x-input id="JobId" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="JobId" :value="old('JobId')" required autofocus />
        </div>
    
    
        <div class="mt-4">
            <x-label for="JobTitle" :value="__('JobTitle')" />
    
            <x-input id="JobTitle" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="JobTitle" :value="old('JobTitle')" required />
        </div>
        <div>
            <x-label for="Description" :value="__('Description')" />
    
            <x-input id="Description" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Description" :value="old('Description')" required autofocus />
        </div>
    
    
        <div class="mt-4">
            <x-label for="Positions" :value="__('Positions')" />
    
            <x-input id="Positions" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="Positions" :value="old('Positions')" required />
        </div>
        <div>
            <x-label for="Location" :value="__('Location')" />
    
            <x-input id="Location" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Location" :value="old('Location')" required autofocus />
        </div>
    
    
        <div class="mt-4">
            <x-label for="AnnualSalary" :value="__('AnnualSalary')" />
    
            <x-input id="AnnualSalary" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="AnnualSalary" :value="old('AnnualSalary')" required />
        </div>
        <div>
            <x-label for="DeptId" :value="__('DeptId')" />
    
            <x-input id="DeptId" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="DeptId" :value="old('DeptId')" required autofocus />
        </div>
    
    
        <div class="mt-4">
            <x-label for="EmpId" :value="__('EmpId')" />
    
            <x-input id="EmpId" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="string" name="EmpId" :value="old('EmpId')" required />
        </div>
        <div>
            <x-label for="Active" :value="__('Active')" />
    
            <x-input id="Active" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="Active" :value="old('Active')" required autofocus />
        </div>
    
    
        <div class="mt-4">
            <x-label for="CreatedDate" :value="__('CreatedDate')" />
    
            <x-input id="CreatedDate" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="date" name="CreatedDate" :value="old('CreatedDate')" required />
        </div>
        <div>
            <x-label for="Created_By" :value="__('Created_By')" />
    
            <x-input id="Created_By" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="Created_By" :value="old('Created_By')" required autofocus />
        </div>
    
    
        <div class="mt-4">
            <x-label for="Remarks" :value="__('Remarks')" />
    
            <x-input id="Remarks" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Remarks" :value="old('Remarks')" required />
        </div>
        <div>
            <x-label for="JobsId" :value="__('JobsId')" />
    
            <x-input id="JobsId" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger" name="JobsId" :value="old('JobsId')" required autofocus />
        </div>
    
    
        <div class="mt-4">
            <x-label for="CloseDate" :value="__('CloseDate')" />
    
            <x-input id="CloseDate" class="block mt-1 w-full h-10" style="background-color:rgb(243, 235, 235);width:500px" type="date" name="CloseDate" :value="old('CloseDate')" required />
        </div>
    
    
    
        <div class="flex items-center justify-end mt-4">
           
    
           
          <input type="submit" value="Save" class="btn btn-success" style="width: 500px; "></br>
      </form>
    
    </div>
  </div>
    </div>
    @endsection

