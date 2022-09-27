@extends('layouts.app')

@section('content')
<div class="main_container">



<div class="main_container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src=" {{ url('public/Image/'.Auth::user()->image) }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            
            <br><br>
            <div class="card-body">
                    <form action="{{url('home')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                        <br>
                        <br>
                        <input type="submit" value="Upload" class=" btn btn-primary active">
                    </form>
                </div>

        </div>
    </div>
</div>

@endsection