<!DOCTYPE html>
<html>
<head>
    <title>How to Image Upload in Laravel 8</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <table class="thead-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Post</th>
                    <th scope="col">Image</th>
</tr>
</thead>
<tbody>
    @foreach ($employees as $employee)
    <tr>
        <th>{{ $employee->id}}</th>
        <td>{{ $employee->name}}</td>
        <td>{{ $employee->email}}</td>
        <td>{{ $employee->post}}</td>
        <td><img src="{{ asset('uploads/employee' .$employee->image)}}" alt="Image"></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</body>
</html>