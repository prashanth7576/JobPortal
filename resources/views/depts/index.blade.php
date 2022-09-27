@extends('layouts.app')


@section('content')
    <br>
    <div class="main_container">
        <div class="container" style="background-color: whitesmoke">
            <div class="row">

                <div class="col-md-12">
                    <div class="flex">
                        <h1 style=" padding:1%; border-radius:50%"> <a href="{{ url('settings') }}"> <i
                                    class="fa fa-angle-left" aria-hidden="true" style="font-size:30px;   "></i> </a> </h1>
                    </div>

                    <br>



                    <div class="card" style="margin-left:2%">
                        
                        <div class="card-body">
                            <a class="btn btn-success" href="{{ route('depts.create') }}"> Add new Department</a>



                            <br>
                            <br>

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success" style="width: 700px; margin-left:200px ">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <div class="table-responsive" style="width: 1100px; background-color:white; box-shadow: 0px 10px 50px rgba(173, 170, 170, 0.7);">

                                <table class="table table-bordered">
                                    <tr style="background-color: black;color:white;font-size:17px">
                                        <th>id</th>
                                        <th>deptshortname</th>
                                        <th>deptname</th>
                                        <th>Remarks</th>


                                        <th width="250px">Action</th>
                                    </tr>
                                    @foreach ($data as $i)
                                        <tr>

                                            <td>{{ $i->id }}</td>
                                            <td>{{ $i->deptshortname }}</td>
                                            <td>{{ $i->deptname }}</td>
                                            <td>{{ $i->Remarks }}</td>

                                            <td>
                                                <form action="{{ route('depts.destroy', $i->id) }}" method="POST">





                                                    <a class="btn btn-primary"
                                                        href="{{ route('depts.edit', $i->id) }}">Edit</a>




                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger active">Delete</button>
                                                </form>
                                            </td>
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
    </div>

    
    
@endsection
