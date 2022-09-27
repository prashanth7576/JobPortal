@extends('layouts.app')


@section('content')
    <html>

    <head></head>

    <body style="background-color:whitesmoke">

        

        <div class="main_container">

            <div style="margin-left:5%; ">




                <div class="card" style="display: flex; width:1200px;margin-top:8%">
                    <h1 style="font-size: 27px;font-weight:600;margin-right:1%"> <b> {{ $count }} </b> </h1>
                    <h1 style="font-size: 27px; font-weight:600"> Employees</h1>

                    <div class="container" style="text-align: right">

                        <a href="{{ url('empdata') }}"> <i class="fa fa-bars" style="margin-top:0%;font-size:25px;"></i>
                        </a>
                    </div>

                </div>

                <br>
                <br>

                <div>
                    <div class="card" style="width: 1200px;">

                        <div class="table-responsive" style="background-color:white; box-shadow: 0px 10px 50px rgba(173, 170, 170, 0.7);">

                            <table class="table ">

                                <tr style="font-size:17px;background-color:black;color:white;">
                                    <th>Employee_Name</th>
                                    <th>Contact</th>
                                    <th>Team</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th></th>
                                    

                                </tr>
                                

                                @foreach ($data as $i)
                                    <tr style="font-size:17px">
                                    
                                        <td> <b> {{ $i->Employee_Name }} </b> <br>
                                            <div class="text-muted"> {{ $i->Position }} </div>
                                        </td>
                                        <td> <i class="	fa fa-envelope"> </i> {{ $i->Email }} <br> <i
                                                class="fa fa-phone"> </i> {{ $i->Mobile_Num }} </td>
                                        <td>{{ $i->Team }}</td>
                                        <td>{{ $i->Date }}</td>
                                        <td>
                                            <h3 class="text-center"
                                                style="border:solid #01DFA5; margin-right:15%; padding-top:4%; padding-bottom:4%; color:#01DFA5; border-radius:2px; font-size:15px">
                                                <b>{{ $i->Status }} </b> </h3>
                                        </td>
                                        <td> <button> <i class="fa fa-ellipsis-h"
                                                    style="font-size: 22px;  margin-top:3px"></i> </button> </td>

                                    </tr>
                                @endforeach
                            </table>


                        </div>

                    </div>
                </div>

            </div>

        </div>

    </body>

    </html>
@endsection
