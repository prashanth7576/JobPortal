@extends('layouts.app')


@section('content')
<div class="main_container" style=" width: (100% - 70px);
margin-left: %; ">
    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-6 offset-md-3">

                <div class="flex">
                    <h1 style=" padding:1%; border-radius:50%"> <a href="{{ url('display') }}"> <i class="fa fa-angle-left"
                                aria-hidden="true" style="font-size:30px;   "></i> </a> </h1>
                </div>

                <br>


                <h4>Add new Job</h4>
                <hr>
                <div class=" flex justify-content-center">
                    <form action="{{ route('save') }}" method="POST">
                        @csrf
                        @if (Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if (Session::get('fail'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ Session::get('fail') }}
                            </div>
                        @endif

                        

                       
                        <div class="mt-4">
                            <x-label for="JobTitle" :value="__('JobTitle')" />

                            <x-input id="JobTitle" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="string" name="JobTitle"
                                :value="old('JobTitle')" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="JobRole" :value="__('JobRole')" />

                            <x-input id="JobRole" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="string" name="JobRole"
                                :value="old('JobRole')" required />
                        </div>

                        <div>
                            <x-label for="Description" :value="__('Description')" />

                            <x-input id="Description" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Description"
                                :value="old('Description')" required autofocus />
                        </div>


                        <div class="mt-4">
                            <x-label for="Positions" :value="__('Positions')" />

                            <x-input id="Positions" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger"
                                name="Positions" :value="old('Positions')" required />
                        </div>
                        <div>
                            <x-label for="Location" :value="__('Location')" />

                            <x-input id="Location" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Location"
                                :value="old('Location')" required autofocus />
                        </div>


                        <div class="mt-4">
                            <x-label for="AnnualSalary" :value="__('AnnualSalary')" />

                            <x-input id="AnnualSalary" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger"
                                name="AnnualSalary" :value="old('AnnualSalary')" required />
                        </div>
                        <div>
                            <x-label for="deptshortname" :value="__('deptshortname')" />

                            <x-input id="deptshortname" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="string" name="deptshortname`"
                                :value="old('deptshortname')" required autofocus />
                        </div>



                        <div>
                            <x-label for="Active" :value="__('Active')" />

                            <x-input id="Active" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger"
                                name="Active" :value="old('Active')" required autofocus />
                        </div>


                        <div class="mt-4">
                            <x-label for="CreatedDate" :value="__('CreatedDate')" />

                            <x-input id="CreatedDate" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="date" name="CreatedDate"
                                :value="old('CreatedDate')" required />
                        </div>
                        <div>
                            <x-label for="CreatedBy" :value="__('CreatedBy')" />

                            <x-input id="CreatedBy" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="string" name="CreatedBy"
                                :value="old('CreatedBy')" required autofocus />
                        </div>

                        <div>
                            <x-label for="Apply_Link" :value="__('ApplyLink')" />

                            <x-input id="ApplyLink" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="string" name="ApplyLink"
                                :value="old('ApplyLink')" required autofocus />
                        </div>



                        <div class="mt-4">
                            <x-label for="CloseDate" :value="__('CloseDate')" />

                            <x-input id="CloseDate" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="date" name="CloseDate"
                                :value="old('CloseDate')" required />
                        </div>
                        <br>


                        <div>



                            <input type="submit" value="Save" class="btn btn-success active" style="width: 500px; "></br>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
