<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.tailwindcss.com"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>







    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">









    <script>
        $(document).ready(function() {
            $('#icon').click(function() {
                $('ul').toggleClass('show');
            });
        });
    </script>

    <title>Document</title>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .sidebar.active .logo_content .logo_name {
            display: flex;
            height: 50px;
            width: 100%;
            opacity: 1;
            margin-top: 27px;
            font-size: 16px;
            font-weight: 600;
            color: aquamarine;
        }

        .sidebar .logo_content .logo_name {
            display: flex;
            height: 50px;
            width: 100%;
            align-items: center;
            opacity: 1;
            pointer-events: none;
            margin-top: 25px;
            margin-left: 10%;
            font-size: 19px;
            font-weight: 600;
            color: aquamarine;
        }

        .sidebar.active .logo_content .logo {
            opacity: 1;
            pointer-events: none;
        }


        .sidebar {
            position: fixed;
            top: 0;
            margin-top: 0%;
            height: 100%;
            width: 200px;
            background: #191919;
            padding: 10px 25px;
            transition: all 0.5s ease;
            border-bottom-left-radius: 12px;
            border-top-left-radius: 12px;
        }

        .sidebar.active {
            width: 90px;
        }

        .sidebar #btn {
            color: white;
            position: absolute;
            left: 80%;
            top: 4px;
            font-size: 20px;
            line-height: 50px;
        }

        .sidebar.active #btn {
            left: 75%;
        }

        .sidebar .logo_content .logo img {
            width: 130px;
        }

        .sidebar ul {
            margin-top: 20px;
        }

        .sidebar ul li {
            height: 50px;
            width: 100%;
            position: relative;
            margin: 5px 15px;
            line-height: 0px;
        }

        .sidebar.active ul li span {
            opacity: 0;
        }

        .sidebar ul li a {
            color: white;
            transition: all 0.4s ease;
            display: flex;
            align-items: center;
            text-decoration: none;
            border-radius: 12px;
        }

        .sidebar ul li a:hover {
            color: white;
            background: #F1C40F;
            padding: 10px;
            height: 50px;
            width: 100%;
        }

        .sidebar.active ul li a:hover {
            color: white;
            background: #F1C40F;
            padding: 2px;
            height: 50px;
        }

        .sidebar ul li a i {
            height: 50px;
            min-width: 50px;
            border-radius: 12px;
            line-height: 50px;
            text-align: center;
        }

        .sidebar ul li .tooltip {
            color: #191919;
            font-size: 0px;
        }

        .sidebar.active ul li .tooltip {
            color: #191919;
            font-size: 17px;
        }

        .sidebar.active ul li .tooltip {
            position: absolute;
            left: 50px;
            top: 0;
            transform: translateY(-50%);
            border-radius: 6px;
            height: 35px;
            width: 122px;
            background: #fff;
            line-height: 35px;
            text-align: center;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            transition: 0s;
            opacity: 0;
            pointer-events: none;
        }

        .sidebar ul li:hover .tooltip {
            top: 50%;
            opacity: 1;
            transition: all 0.5s ease;
        }

        .sidebar ul h1 {
            color: white;
            font-size: 18px;
            opacity: 1;
            margin-top: 15%;
            margin-bottom: 15%;
        }

        .sidebar.active ul h1 {
            color: white;
            opacity: 0;
        }

        nav {
            position: fixed;
            background: #C0C0C0;
            height: 70px;
            width: 99%;
            border-top-right-radius: 25px;
        }

        .search-container {
            margin-left: 20%;
            padding-top: 1%;
        }

        nav ul {
            float: right;
            margin-right: 10%;
            margin-top: -30px;
        }

        nav ul li {
            display: inline-block;
            margin: 0 8px;

            line-height: 50px;
        }

        nav ul form button {
            margin-bottom: 0px;
        }

        nav a {
            color: black;
            font-size: 18px;
            text-decoration: none;
        }

        a.ctive,
        a:hover {
            background: whitesmoke;
            padding: 5px;
            border-radius: 5px;
            text-decoration: none;
        }

        nav #icon {
            font-size: 20px;
            line-height: 0px;
            float: right;
            margin-right: 35px;
            margin-top: -25px;
            cursor: pointer;
            display: none;
        }

        nav ul li .dropdown .dropdown-menu .dropdown-item:hover {
            background: #F1C40F;
            padding: 3px;
            border-radius: 10px;
            margin: 5px;

        }

        nav ul li .dropdown .dropdown-menu a h6:hover {
            background: #F1C40F;
            padding: 5px;
            border-radius: 10px;
            margin: 5px;
        }



        @media (max-width:1048px) {
            nav ul {
                margin-right: 20px;
            }

            nav a {
                font-size: 17px;
            }
        }

        @media (max-width:909px) {
            nav {}

            nav #icon {
                display: block;
            }


            nav ul {
                position: fixed;
                width: 99%;
                height: 13vh;
                background: #979A9A;
                top: 80px;
                left: -100%;
                text-align: center;
                transition: all .5s;
            }

            .search-container {
                margin-left: 30%;
            }

            nav ul li img {

                display: none;

            }

            nav ul li h6 {

                color: black;
            }


            nav ul li {
                display: block;
                margin-left: 40%;
                line-height: 5px;

            }

            nav ul button {
                margin-left: 0%;
                color: whitesmoke;
                margin-top: 3%;
            }

            nav a {
                font-size: 19px;
                color: whitesmoke;
                margin-left: 20%;
            }

            a.active,
            a:hover {
                border: none;
                background: whitesmoke;
            }

            nav ul li .dropdown .dropdown-menu .dropdown-item:hover {
                background: #F1C40F;
                padding: 3px;
                border-radius: 10px;
                margin: 5px;

            }

            nav ul li .dropdown .dropdown-menu a h6:hover {
                background: #F1C40F;
                padding: 5px;
                border-radius: 10px;
                margin: 5px;
            }




            nav ul.show {
                left: 0;
            }

            .sidebar {
                width: 90px;
            }

            .sidebar ul li .tooltip {
                color: #191919;
                font-size: 0px;
            }

            .sidebar ul li .tooltip {
                color: #191919;
                font-size: 17px;
            }

            .sidebar ul li .tooltip {
                position: absolute;
                left: 50px;
                top: 0;
                transform: translateY(-50%);
                border-radius: 6px;
                height: 35px;
                width: 122px;
                background: #fff;
                line-height: 35px;
                text-align: center;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                transition: 0s;
                opacity: 0;
                pointer-events: none;
            }

            .sidebar ul li:hover .tooltip {
                top: 50%;
                opacity: 1;
                transition: all 0.5s ease;
            }

            .sidebar ul h1 {
                opacity: 0;
            }

            .sidebar ul li span {
                opacity: 0;
            }

            .sidebar ul li a:hover {
                color: white;
                background: #F1C40F;
                padding: 2px;
                padding-right: 0px;
                height: 50px;
            }

            .sidebar .logo_content .logo .logo_name {
                opacity: 1;
                font-size: 15px;
            }

            .sidebar .logo_content .logo img {
                opacity: 1;
                height: 30px;
                width: 150px;
            }

        }


        .main_container {
            width: (100% - 700px);
            margin-top: 0px;
            margin-left: 200px;
            padding: 15px;
            transition: all 0.3s ease;
        }

    </style>
</head>

<body>

    <div class="navbar">
        <nav>




            <div class="search-container">

                <form action=" {{ url('display') }}" method="GET" role="search">

                    <div class="input-group">
                        <input type="text" placeholder="Search Jobs" name="term" placeholder="Search Jobs" id="term"
                            style="height:32px;width:300px">
                        <button type="submit" class="btn btn-info active"><i class="fa fa-search"
                                style="padding-left:7px"></i></button>

                    </div>
                </form>


            </div>


            <ul>



                @auth

                    <li>
                        <img class=" rounded-circle" src="{{ url('public/Image/' . Auth::user()->image) }}"
                            style="width:40px;height:40px;border-radius:50%;margin-bottom:2%;">
                    </li>




                    <li>

                        <div class="dropdown" style="display:flex">


                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" style="font-weight:700">
                                <h1> {{ auth()->user()->name }} <i class="	fa fa-sort-down"
                                        style="font-size: 20px; padding-top:-3%"></i> </h1>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 200px">
                                <a class="dropdown-item" href="#">
                                    <form action="{{ route('logout') }}" method="post" class="dropdown-item" href="">

                                        @csrf

                                        <button type="submit" style="size: 5px">
                                            <h6 style="margin-left: 100%"> Logout </h6>
                                        </button>


                                    </form>
                                </a>

                                <a href="change-password">
                                    <h6 style="padding-left: 10%;margin-bottom:3%;margin-top:2%;font-size:15px"> Change
                                        Password </h6>
                                </a>
                                <a href="home">
                                    <h6 style="padding-left: 20%;margin-top:5%;font-size:15px"> Upload Image </h6>
                                </a>
                            </div>


                        </div>
                    </li>




                @endauth

            </ul>

            <label id="icon" style="margin-left: 70%;"><i class="fa fa-bars"></i>
            </label>
        </nav>

    </div>



    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <a href="/">
                    <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="logo">
                </a>

                <div class="logo_name">XSILICA HRMS</div>

            </div>



        </div>
        <ul class="nav_list">
            <li>
                <a href="/">
                    <i class="fa fa-dashboard "></i>

                    <span class="links_name">Dashboard</span>

                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            <li>
                <a href="calender">
                    <i class="fa fa-calendar"></i>

                    <span class="text nav-text">Calendar</span>

                </a>
                <span class="tooltip">Calendar</span>
            </li>

            <h1>RECRUITMENT</h1>

            <li>
                <a href="display">
                    <i class="fa fa-briefcase "></i>

                    <span class="text nav-text">Jobs</span>

                </a>
                <span class="tooltip">Jobs</span>
            </li>

            <li>
                <a href="candidates">
                    <i class="fa fa-group"></i>

                    <span class="text nav-text">Candidates</span>

                </a>
                <span class="tooltip">Candidates</span>
            </li>

            <li>
                <a href="referrals">
                    <i class="fa fa-clone "></i>

                    <span class="text nav-text">My Referrals</span>

                </a>
                <span class="tooltip">My Referrals</span>
            </li>

            <h1>ORGANIZATION</h1>

            <li>
                <a href="{{ route('employe.index') }}">
                    <i class="fa fa-user "></i>

                    <span class="text nav-text">Employee</span>

                </a>
                <span class="tooltip">Employee</span>
            </li>

            <li>
                <a href="structure">
                    <i class="fa fa-sitemap "></i>

                    <span class="text nav-text">Structure</span>

                </a>
                <span class="tooltip">Structure</span>
            </li>

            <li>
                <a href="settings">
                    <i class="fa fa-cog "></i>

                    <span class="text nav-text">Settings</span>

                </a>
                <span class="tooltip">Settings</span>
            </li>

        </ul>

    </div>





    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");


        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>





    @yield('content')





</body>

</html>
