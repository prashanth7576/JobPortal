<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script src="https://cdn.tailwindcss.com"></script>

    <title>XSILICA HRMS</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<style>
    body{
        background-image: url("https://images.unsplash.com/photo-1497091071254-cc9b2ba7c48a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OTF8fHRlY2hub2xvZ3l8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60");
     
     
        background-size: cover;
    }
</style>

</head>

<body >


    <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-5" style="margin-top: 9%;background-color:rgba(192,192,192,0.2);border-radius:5%">
            <div class="" style="padding-top:4%;padding-bottom:4%;border-radius:25px">
                <div class="flex justify-center">
                    <img src="https://imagizer.imageshack.com/img923/5138/bRZo8P.png" alt="logo" height="170px"
                        width="150px">

                </div>
                <br>
                <div class="flex justify-center" style="margin-top: 0%">
                    <div class="w-6/12    rounded-lg">


                        @if (session('status'))
                            <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session('message'))
                        <div class="alert alert-success-500 p-4 rounded-lg mb-6 text-white text-center">
                            {{ session('message') }}
                        </div>
                    @endif

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success" style="width: 375px;  ">
                                <p>{{ $message }}</p>
                            </div>
                        @endif




                        <form action="{{ route('login') }}" method="post">
                            @csrf


                            <div class="mb-4">
                                <label for="email" class="sr-only">Email</label>
                                <input type="text" name="email" id="email" placeholder="Email"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('email') border-red-500 @enderror"
                                    value="{{ old('email') }}">

                                @error('email')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="password" placeholder="Enter password"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password') border-red-500 @enderror"
                                    value="">

                                @error('password')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <a href="{{route('forget.password.get')}}" > <h1  style="font-size: 17px; font-weight:600; margin-left: 50%; margin-bottom:5%;color:whitesmoke"> Forgot Password! </h1> </a>



                            <div>
                                <button type="submit"
                                    class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                            </div>

                            <br>



                            <a href="register" >  <h1 class="text-center" style="font-size: 17px; font-weight:600; margin-left: 0%; margin-bottom:5%;color:whitesmoke;text-decoration:underline"> New User? Register </h1> </a>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
