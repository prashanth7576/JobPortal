@extends('layouts.app')


@section('content')

<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-9 margin-tb">
        <div >
            <h2>Edit Job</h2>
        </div>
        <br>
        <div >
            <a class="btn btn-primary" href="index">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>There were some problems with your input</strong>
    <ul>
        @foreach ($errors->all() as $error )
            <li>{{$error}} </li>
            
        @endforeach
    </ul>    
</div>
@endif

@foreach ($data as $i )

<form action="update" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-3">
        </div>

    <div class="col-md-9 flex justify-center">
        <div class="form-group">
            <strong>JobId</strong>
            <input type='text' name='JobId' value="{{$i->JobTitle}}" class="form-control" placeholder="{{$i->JobId}}" style="width: 500px">
        </div>
    </div>

    <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>
    
@endforeach

@endsection

