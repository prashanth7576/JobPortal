@extends('layouts.app')





@section('content')


    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>HRMS</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <style>
            .list-group {
                width: 225px;
                height: 150px;
                padding: 0.5em;
            }

        </style>
    </head>

    <body style="background-color:whitesmoke;">
        <div class="main_container">
            <br>
            <br>

          

            <div class="top" style="margin-top: 8%">
                <div class="container"
                    style="  width: 0px; height: 5vh; display: flex; margin-left:5%;margin-right:15%;margin-top:2%">
                    <div class="status" id="no_status">
                        <div style="width: 13rem;">

                            <h3 style="font-size:20px;">Candidates</h3>

                        </div>

                    </div>

                    <div class="status">
                        <div style="width: 13rem;">

                            <h3 style="font-size:20px;">Job Details</h3>


                        </div>
                    </div>
                    <div class="status">
                        <div style="width: 20rem;">
                            <h3 style="font-size:20px;">Time Line & Notes</h3>

                        </div>
                    </div>
                    <div class="status">
                        <div style="width: 13rem;">

                            <h3 style="font-size:20px;">
                                Hiring Team </h3>

                        </div>
                    </div>
                </div>
            </div>


            <div class="container" style=" display: flex; margin-left:5%;margin-right:15%;margin-top:3%">
                <div class="status" id="no_status">

                    <div class="card" style="width: 20rem;">

                        <h3 style="font-size:20px;margin-top:-4%">
                            Total Candidates: <sapn style="background-color: #b34d4d; padding-left:7%;padding-right:7%">
                                {{ $count }} </span> </h3>
                    </div>
                </div>
            </div>

            <br>

            @if ($message = Session::get('status'))
            <div class="alert alert-success" style="width: 700px; margin-left:350px ">
                <p>{{ $message }}</p>
            </div>
        @endif
            





            <div class="card" style="  width: 1300px; height: 90vh; display: flex; margin-left:5%;margin-top:5%">
                <div class="status" id="no_status">
                    <div class="card" style="width: 22rem; border-top: 8px solid #0080ff">

                        <div style="display: flex">
                            <h5 style="margin-left:5%;font-size:17px; padding-top:5px"> New Applied</h5>
                            <br>

                        </div>
                    </div>

                    <div style="margin-top:5px;">

                        <ul class="list-group connectedSortable" id="padding-item-drop" style="width: 22rem;">
                            @if (!empty($panddingItem) && $panddingItem->count())
                                @foreach ($panddingItem as $key => $value)
                                    <li class="list-group-item " item-id="{{ $value->id }}"
                                        style="background-image: linear-gradient(to top, lightgrey 0%, lightgrey 1%, #e0e0e0 26%, #efefef 48%, #d9d9d9 75%, #bcbcbc 100%);">
                                        <div>
                                            <div style="display:flex">
                                                <img src="{{ $value->Profile_url }}"
                                                    style=" border-radius:50%;height:50px; width:50px">

                                                <p
                                                    style="margin-right:-30%; margin-left:12%;margin-bottom:%;font-size:16px">
                                                    {{ $value->First_Name }} {{ $value->Last_Name }}</p>
                                            </div>

                                            <div style="display:flex;margin-top:15%">


                                                <div class="overlay"
                                                    style="position: relative; margin-left:-2%; color:#F4D03F;font-size:13px">

                                                    @while ($value->Rating > 0)
                                                        @if ($value->Rating > 0.5)
                                                            <i class="fa fa-star checked"></i>
                                                        @else
                                                            <i class="fa fa-star-half-o"></i>
                                                        @endif
                                                        @php $value->Rating--; @endphp
                                                    @endwhile

                                                </div>
                                                <h4 style="margin-left:5%;margin-top:2%;font-size:17px">5 years Exp</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <br>
                                @endforeach
                            @endif
                        </ul>

                    </div>
                </div>
                <div class="status" style="margin-left:4%">
                    <div class="card" style="width: 22rem;border-top: 8px solid #008B8B">

                        <div style="display: flex">
                            <h5 style="margin-left:5%;font-size:17px;padding-top:5px"> Screening</h5>

                        </div>
                    </div>
                    <div style="width: 15rem; margin-top:5px"" >

                        <ul class=" list-group  connectedSortable" id="complete-item-drop" style="width: 22rem">
                        @if (!empty($completeItem) && $completeItem->count())
                            @foreach ($completeItem as $key => $value)
                                <li class="list-group-item " item-id="{{ $value->id }}"
                                    style="background-image: linear-gradient(to top, lightgrey 0%, lightgrey 1%, #e0e0e0 26%, #efefef 48%, #d9d9d9 75%, #bcbcbc 100%);">
                                    <div>
                                        <div style="display:flex">
                                            <img src="{{ $value->Profile_url }}"
                                                style=" border-radius:50%;height:50px; width:50px">

                                            <p style="margin-left:12%;margin-right:-30%;margin-bottom:%;font-size:17px">
                                                {{ $value->First_Name }} {{ $value->Last_Name }}</p>
                                        </div>

                                        <div style="display:flex;margin-top:15%">


                                            <div class="overlay"
                                                style="position: relative; margin-left:-2%; color:#F4D03F;font-size:13px">

                                                @while ($value->Rating > 0)
                                                    @if ($value->Rating > 0.5)
                                                        <i class="fa fa-star checked"></i>
                                                    @else
                                                        <i class="fa fa-star-half-o"></i>
                                                    @endif
                                                    @php $value->Rating--; @endphp
                                                @endwhile

                                            </div>
                                            <h4 style="margin-left:5%;margin-top:2%;font-size:17px">5 years Exp</h4>
                                        </div>
                                    </div>
                                </li>
                                <br>
                            @endforeach
                        @endif
                        </ul>

                    </div>
                </div>

                <div class="status" style="margin-left:4%">
                    <div class="card" style="width: 22rem;border-top: 8px solid #b34d4d">

                        <div style="display: flex">
                            <h5 style="margin-left:5%;font-size:17px;padding-top:5px"> Interview </h5>

                        </div>
                    </div>

                    <div class="card" style="width: 15rem;margin-top:5px"">

                        <ul class=" list-group  connectedSortable" id="good-item-drop" style="width: 22rem">
                        @if (!empty($goodItem) && $goodItem->count())
                            @foreach ($goodItem as $key => $value)
                                <li class="list-group-item " item-id="{{ $value->id }}"
                                    style="background-image: linear-gradient(to top, lightgrey 0%, lightgrey 1%, #e0e0e0 26%, #efefef 48%, #d9d9d9 75%, #bcbcbc 100%);">
                                    <div>
                                        <div style="display:flex">
                                            <img src="{{ $value->Profile_url }}"
                                                style="margin-top: %;margin-left:%; border-radius:50%;height:50px; width:50px">

                                            <p style="margin-left:12%;margin-right:-35%;font-size:17px">
                                                {{ $value->First_Name }} {{ $value->Last_Name }}</p>
                                        </div>

                                        <div style="display:flex;margin-top:15%">


                                            <div class="overlay"
                                                style="position: relative; margin-left:-2%; color:#F4D03F;font-size:13px">

                                                @while ($value->Rating > 0)
                                                    @if ($value->Rating > 0.5)
                                                        <i class="fa fa-star checked"></i>
                                                    @else
                                                        <i class="fa fa-star-half-o"></i>
                                                    @endif
                                                    @php $value->Rating--; @endphp
                                                @endwhile

                                            </div>
                                            <h4 style="margin-left:5%;margin-top:2%;font-size:17px">5 years Exp</h4>
                                        </div>
                                    </div>
                                </li>
                                <br>
                            @endforeach
                        @endif
                        </ul>

                    </div>
                </div>



                <div class="status" style="margin-left:4%">
                    <div class="card" style="width: 22rem;border-top: 8px solid #00ffff; ">

                        <div>
                            <h5 style="margin-left:5%;font-size:17px; padding-top:5px"> Hired </h5>

                        </div>
                    </div>


                    <div style="width: 15rem;margin-top:5px">

                        <ul class="list-group  connectedSortable" id="candidate-item-drop" style="width: 22rem">
                            @if (!empty($candidate) && $candidate->count())
                                @foreach ($candidate as $key => $value)
                                    <li class="list-group-item " item-id="{{ $value->id }}"
                                        style="background-image: linear-gradient(to top, lightgrey 0%, lightgrey 1%, #e0e0e0 26%, #efefef 48%, #d9d9d9 75%, #bcbcbc 100%);">
                                        <div>
                                            <div style="display:flex">
                                                <img src="{{ $value->Profile_url }}"
                                                    style="margin-top: %;margin-left:%; border-radius:50%;height:50px; width:50px">

                                                <p style="margin-left:12%;margin-right:-30%;font-size:17px">
                                                    {{ $value->First_Name }} {{ $value->Last_Name }}</p>
                                            </div>


                                            <div style="display:flex;margin-top:15%">


                                                <div class="overlay"
                                                    style="position: relative; margin-left:-2%; color:#F4D03F;font-size:13px">

                                                    @while ($value->Rating > 0)
                                                        @if ($value->Rating > 0.5)
                                                            <i class="fa fa-star checked"></i>
                                                        @else
                                                            <i class="fa fa-star-half-o"></i>
                                                        @endif
                                                        @php $value->Rating--; @endphp
                                                    @endwhile

                                                </div>
                                                <h4 style="margin-left:5%;margin-top:2%;font-size:17px">5 years Exp</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <br>
                                @endforeach
                            @endif
                        </ul>

                    </div>


                </div>
            </div>

            <div id="overlay"></div>

        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function() {
                $("#padding-item-drop, #complete-item-drop, #good-item-drop,#candidate-item-drop").sortable({
                    connectWith: ".connectedSortable",
                    opacity: 0.5,
                });
                $(".connectedSortable").on("sortupdate", function(event, ui) {
                    var NewApplied = [];
                    var Screening = [];
                    var Interview = [];
                    var Hired = [];
                    $("#padding-item-drop li").each(function(index) {
                        if ($(this).attr('item-id')) {
                            NewApplied[index] = $(this).attr('item-id');
                        }
                    });
                    $("#complete-item-drop li").each(function(index) {
                        Screening[index] = $(this).attr('item-id');
                    });
                    $("#good-item-drop li").each(function(index) {
                        Interview[index] = $(this).attr('item-id');
                    });
                    $("#candidate-item-drop li").each(function(index) {
                        Hired[index] = $(this).attr('item-id');
                    });
                    $.ajax({
                        url: "{{ route('update.items') }}",
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            NewApplied: NewApplied,
                            Screening: Screening,
                            Interview: Interview,
                            Hired: Hired
                        },
                        success: function(data) {
                            Swal('success');
                        }
                    });

                });
            });
        </script>

        

    </body>

    </html>

@endsection
