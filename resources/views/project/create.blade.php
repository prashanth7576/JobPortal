@extends('layouts.app')


@section('content')
<div class="col-md-4">
</div>
<div class="col-md-6">
<div class="main_container">
<div class="" >
<form  action="{{ route('project.store') }}" method="POST"  ">

@csrf
<br><br>


<div class="mt-4">
                <x-label for="project_id" :value="__('Project Id:')"  style="font-size:15px"/>
        
                <x-input id="project_id"  style="background-color:white;margin-left:0%;width:200px" type="string" name="project_id" :value="old('project_id')" required />
            </div>

            <div class="mt-4">
                <x-label for="project_name" :value="__('Title:')" style="font-size:15px" />
        
                <x-input id="project_name"  style="width:200px" type="string" name="project_name" :value="old('project_name')" required />
            </div>

  <br>
  
  <button type="submit" class="btn btn-primary active">Submit</button>
  

</form>
</div>
</div>
</div>


@endsection