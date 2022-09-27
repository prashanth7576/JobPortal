<!DOCTYPE html>
<html>
<head>
    <title>How to Image Upload in Laravel 8</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="{{route('addimage') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Name">
</div>

<div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Name">
</div>

<div class="form-group">
                <label>Post</label>
                <input type="text" class="form-control" placeholder="Enter Name">
</div>
<div class="form-group">
                    <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                </div>

<button type="submit" name="submit" class="btn btn-primary">Save</button>
</form>
</div>
</body>
</html>