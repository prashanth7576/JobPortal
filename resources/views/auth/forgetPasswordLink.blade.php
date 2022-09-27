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


</head>

<body  style="background-color: whitesmoke">
    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="margin-top:3%">

       
    <div class="bg-white" style="padding-top:4%;padding-bottom:4%;border-radius:25px">
        <div class="flex justify-center">
            <img src="https://imagizer.imageshack.com/img923/5138/bRZo8P.png" alt="logo" height="170px" width="150px"
                style="align-item:center">
            
        </div>

        <br>
        

        <div class="flex justify-center">
            <div class="w-6/12    bg-white rounded-lg">

                <h1 style="font-size: 20px; font-weight:600;color:rgb(19, 92, 116);margin-bottom:3%">Reset Password!</h1>

                <form action="{{ route('reset.password.post') }}" method="post">
                    @csrf

                    
                    <input type="hidden" name="token" value="{{ $token }}">


                    <div class="mb-4">
                        <label for="email" class="sr-only">E-Mail Address</label>
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
                        <input type="password" name="password" id="password" placeholder="choose a password"
                            class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password') border-red-500 @enderror"
                            value="">

                        @error('password')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="sr-only">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Re-enter password"
                            class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password_confirmation') border-red-500 @enderror"
                            value="">

                        @error('passwor_confirmation')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                   
                    <br>
    
                    


                    <div>
                        <button type="submit"
                            class="bg-blue-500 text-white  px-4 py-3 rounded font-medium w-full">Reset Password</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
    </div>

</body>

</html>
