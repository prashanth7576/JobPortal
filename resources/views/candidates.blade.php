@extends('layouts.app')


@section('content')
<div class="main_container" >
    <br>
    <br>
    <br>
    <div class="container" style="background-color: whitesmoke">

        <div class="row">
           
            <div class="col-md-10" style="width: 1000px">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive" style="background-color:white; box-shadow: 0px 10px 50px rgba(173, 170, 170, 0.7);">
                            <table class="table table-bordered">

                                <tr style="font-size:17px;background-color:black;color:white">
                                    <th>First_Name</th>
                                    <th>Last_Name</th>
                                    <th>City</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>DOB</th>

                                </tr>


                                @foreach ($data as $i)
                                    <tr>
                                        <td>{{ $i->First_Name }}</td>
                                        <td>{{ $i->Last_Name }}</td>
                                        <td>{{ $i->City }}</td>
                                        <td>{{ $i->Email }}</td>
                                        <td>{{ $i->Mobile }}</td>
                                        <td>{{ $i->DOB }}</td>

                                    </tr>
                                @endforeach
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
