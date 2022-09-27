@extends('layouts.app')


@section('content')
    <br>
    <div class="flex" style="margin-left: 300px">
        <h1 style="background-color: rgb(243, 233, 233); padding:1%; border-radius:50%"> <a href="{{ url('display') }}"> <i
                    class="fa fa-angle-left" aria-hidden="true" style="font-size:30px;   "></i> </a> </h1>
    </div>
    <br>

    <div class="flex justify-center">


        <form action="{{ route('jobs.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <b>
                        <h2> Personal Details*:</h2>
                    </b><br>

                    <div class="form-group">
                        <label for="InputName">FirstName:</label> <input name="Firstname" id="name" placeholder="Your Name"
                            data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="Last Name">Last Name:</label> <input name="Last Name" id="Last Name"
                            placeholder="Last Name " data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label> <input name="email" id="email" placeholder=" email"
                            data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <label for="Mobile Number">Mobile Number:</label> <input name="Mobile Number" id="Mobile Number"
                            placeholder=" Mobile Number" data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="Alternate Mobile Number">Alternate Mobile Number:</label> <input
                            name="Alternate Mobile Number" id="Alternate Mobile Number"
                            placeholder="Alternate Mobile Number " data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <label for="Date Of Birth">Date Of Birth:</label> <input name="Date Of Birth" id="Date Of Birth"
                            placeholder="DD/MM/YYYY " data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                
                        <label>Gender:</label>
                        <input type="radio" id="gender" name="gender" value="Male">
                        <label for="gender">Male</label>
                        <input type="radio" id="gender" name="gender" value="Female">
                        <label for="gender">Female</label> 
                        <input type="radio" id="gender" name="gender" value="Others">
                        <label for="gender">Others</label>
                        

                
                    <div class="form-group">
                        <label for="Citizenship">Citizenship:</label> <input name="Citizenship" id="Citizenship"
                            placeholder="Citizenship " data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="Address">Address:</label> <input name="Address" id="Address" placeholder="Address"
                            data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>

                    <br><br>
                    <b>
                        <h2> Educational Details*:</h2>
                    </b><br>
                    <b>
                        <p>10th Standard*:</p>
                    </b>
                    <br>
                    <div class="form-group">
                        <label for="InputName">Board:</label> <input name="Board" id="Board" placeholder=" Board"
                            data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="InputName">Year Of Passing:</label> <input name="Year Of Passing" id="Year Of Passing"
                            placeholder=" Year Of Passing" data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="InputName">Percentage:</label> <input name="Percentage" id="Percentage"
                            placeholder=" Percentage" data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                    <br>
                    <b>
                        <p>Inter/Diploma*:</p>
                    </b>
                    <br>
                    <div class="form-group">
                        <label for="InputName">Board:</label> <input name="Board" id="Board" placeholder=" Board"
                            data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="InputName">Year Of Passing:</label> <input name="Year Of Passing" id="Year Of Passing"
                            placeholder=" Year Of Passing" data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="InputName">Percentage:</label> <input name="Percentage" id="Percentage"
                            placeholder=" Percentage" data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                    <br>
                    <b>
                        <p>Graduation*:</p>
                    </b>
                    <br>
                    <div class="form-group">
                        <label for="University">University:</label> <input name="University" id="University"
                            placeholder="University" data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="InputName">Year Of Passing:</label> <input name="Year Of Passing" id="Year Of Passing"
                            placeholder=" Year Of Passing" data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="InputName">Percentage:</label> <input name="Percentage" id="Percentage"
                            placeholder=" Percentage" data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="Specialization">Specialization:</label> <input name="Specialization" id="Specialization"
                            placeholder="Specialization" data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                    <br><br>
                    <b>
                        <h2>Experience Details:</h2>
                    </b>
                    <br>
                    <div class="form-group">
                        <label for="Total Experience">Total Experience:</label> <input name="Total Experience"
                            id="Total Experience" placeholder="Total Experience" data-rule="minlen:4" class="form-control"
                            type="text">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="Previous Company Name">Previous Company Name:</label> <input
                            name="Previous Company Name" id="Previous Company Name" placeholder="Previous Company Name"
                            data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="Job Title">Job Title:</label> <input name="Job Title" id="Job Title"
                            placeholder="Job Title" data-rule="minlen:4" class="form-control" type="text">
                        <div class="validation"></div>
                    </div>

                    <br><br>
                    <b>
                        <h2>Documents:</h2>
                    </b>
                    <br>
                    <div style="padding-bottom: 18px;">Resume upload:<br />
                        <input id="data_10" name="data_10" style="max-width : 300px;" type="file" class="form-control" />
                    </div>
                    <br><br><br>
                    <div>
                        <button type="submit" class="btn btn-primary active" style="width: 500px">Submit</button>
                    </div>




                </div>

            </div>


        </form>

    </div>

    </div>
    </div>
@endsection
