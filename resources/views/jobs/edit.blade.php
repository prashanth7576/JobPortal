@extends('layouts.app')


@section('content')

    <div class="main_container" ">

        <br>
    <br>
    <br>

        <div class="row">
            <div class="col-lg-12 margin-tb" style="margin-left: 7%;">
               
                <div>
                    <a class="btn btn-primary" href="{{ route('jobs.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <br>

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

            <form action="{{ route('jobs.update', $job->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row" >
                    <div class=" col-md-12" style="margin-left: 14%">
                        <div style="margin-bottom: 4%">
                            <x-label for="JobId" :value="__('JobId')"  style="font-size: 17px"/>

                            <x-input id="JobId" class="block mt-1  h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="string" name="JobId"
                                value="{{ $job->JobId }}" required autofocus />
                        </div>

                        <div class="mt-4" style="margin-bottom: 4%">
                            <x-label for="JobRole" :value="__('JobRole')" style="font-size: 17px"/>

                            <x-input id="JobRole" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="string" name="JobRole"
                                value="{{ $job->JobRole }}" required />
                        </div>


                        <div class="mt-4" style="margin-bottom: 4%">
                            <x-label for="JobTitle" :value="__('JobTitle')" style="font-size: 17px"/>

                            <x-input id="JobTitle" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="string" name="JobTitle"
                                value="{{ $job->JobTitle }}" required />
                        </div>

                        <div style="margin-bottom: 4%">
                            <x-label for="Description" :value="__('Description')" style="font-size: 17px"/>

                            <x-input id="Description" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Description"
                                value="{{ $job->Description }}" required autofocus />
                        </div>


                        <div class="mt-4" style="margin-bottom: 4%">
                            <x-label for="Positions" :value="__('Positions')" style="font-size: 17px"/>

                            <x-input id="Positions" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger"
                                name="Positions" value="{{ $job->Positions }}" required />
                        </div>
                        <div style="margin-bottom: 4%">
                            <x-label for="Location" :value="__('Location')" style="font-size: 17px"/>

                            <x-input id="Location" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Location"
                                value="{{ $job->Location }}" required autofocus />
                        </div>


                        <div class="mt-4" style="margin-bottom: 4%">
                            <x-label for="AnnualSalary" :value="__('AnnualSalary')" style="font-size: 17px"/>

                            <x-input id="AnnualSalary" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger"
                                name="AnnualSalary" value="{{ $job->AnnualSalary }}" required />
                        </div>
                        <div style="margin-bottom: 4%">
                            <x-label for="deptshortname" :value="__('deptshortname')" style="font-size: 17px"/>

                            <x-input id="deptshortname" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="string" name="deptshortname"
                                value="{{ $job->deptshortname }}" required autofocus />
                        </div>


                        <div style="margin-bottom: 4%">
                            <x-label for="Active" :value="__('Active')" style="font-size: 17px"/>

                            <x-input id="Active" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger"
                                name="Active" value="{{ $job->Active }}" required autofocus />
                        </div>


                        <div class="mt-4" style="margin-bottom: 4%">
                            <x-label for="CreatedDate" :value="__('CreatedDate')" style="font-size: 17px"/>

                            <x-input id="CreatedDate" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="date" name="CreatedDate"
                                value="{{ $job->CreatedDate }}" required />
                        </div>
                        <div style="margin-bottom: 4%">
                            <x-label for="Created_By" :value="__('CreatedBy')" style="font-size: 17px"/>

                            <x-input id="CreatedBy" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="string" name="CreatedBy"
                                value="{{ $job->CreatedBy }}" required autofocus />
                        </div>


                        <div class="mt-4" style="margin-bottom: 4%">
                            <x-label for="Apply_Link" :value="__('ApplyLink')" style="font-size: 17px"/>

                            <x-input id="ApplyLink" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="string" name="ApplyLink"
                                value="{{ $job->ApplyLink }}" required />
                        </div>



                        <div class="mt-4" style="margin-bottom: 4%">
                            <x-label for="CloseDate" :value="__('CloseDate')" style="font-size: 17px"/>

                            <x-input id="CloseDate" class="block mt-1 w-full h-10"
                                style="background-color:rgb(243, 235, 235);width:500px" type="date" name="CloseDate"
                                value="{{ $job->CloseDate }}" required />
                        </div>



                        <div class="flex items-center justify-end mt-4">



                            <input type="submit" value="Save" class="btn btn-success active" style="width: 500px; "></br>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    


@endsection
