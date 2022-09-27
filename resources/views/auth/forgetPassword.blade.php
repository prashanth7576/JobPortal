

<html>
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
    </head>

    <body>

        <div class="row">
            <div class="col-md-3"></div>
    
            <div class="col-md-6" style="margin-top: 9%">
                <div class="bg-white" style="padding-top:4%;padding-bottom:4%;border-radius:25px">
                    <div class="flex justify-center">
                        <img src="https://imagizer.imageshack.com/img923/5138/bRZo8P.png" alt="logo" height="170px"
                            width="150px">
    
                    </div>
                    <br>
                    <div class="flex justify-center" style="margin-top: 0%">
                        <div class="w-6/12    rounded-lg">
    
    
                           
    
                            @if ($message = Session::get('message'))
                                <div class="alert alert-success" style="width: 375px;  ">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
    
    
                            <h1 style="font-size: 20px; font-weight:600;color:rgb(19, 92, 116);margin-bottom:3%">Reset Password!</h1>
                            
    
                            <form action="{{ route('forget.password.post') }}" method="post">
                                @csrf
    
    
                                <div class="mb-4">
                                    <label for="email" class="sr-only">Enter Your Email</label>
                                    <input type="text" name="email" id="email" placeholder="Email"
                                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('email') border-red-500 @enderror"
                                        value="{{ old('email') }}">
    
                                    @error('email')
                                        <div class="text-red-500 mt-2 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
    
                                
                               
    
    
    
                                <div>
                                    <button type="submit"
                                        class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Send Password Reset Link </button>
                                </div>

                                <a href="login"><h1 class="text-muted text-center" style="font-size:17px;font-weight:600;margin-top:5%;text-decoration:underline">Back to login page</h1></a>
    
                               
    
    
                            </form>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>

