<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.tailwindcss.com"></script>

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
            font-size: 17px;
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
        
        body {
            position: relative;
            min-height: 100vh;
            width: 100%;
            overflow: hidden;
        }
        
        .sidebar {
            position: fixed;
            top: 0;
            height: 100%;
            width: 200px;
            background: #191919;
            padding: 10px 25px;
            transition: all 0.5s ease;
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
            width: 50px;
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
        }
        
        .sidebar.active ul h1 {
            color: white;
            opacity: 0;
        }
    </style>
</head>

<body>


    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_name">XSILICA HRMS</div>

            </div>
            <i class="fa fa-bars" id="btn"></i>

        </div>
        <ul class="nav_list">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard "></i>

                    <span class="links_name">Dashboard</span>

                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-calendar"></i>

                    <span class="text nav-text">Calendar</span>

                </a>
                <span class="tooltip">Calendar</span>
            </li>

            <h1>RECRUITMENT</h1>

            <li>
                <a href="jobs">
                    <i class="fa fa-briefcase "></i>

                    <span class="text nav-text">Jobs</span>

                </a>
                <span class="tooltip">Jobs</span>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-group"></i>

                    <span class="text nav-text">Candidates</span>

                </a>
                <span class="tooltip">Candidates</span>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-clone "></i>

                    <span class="text nav-text">My Referrals</span>

                </a>
                <span class="tooltip">My Referrals</span>
            </li>

            <h1>ORGANIZATION</h1>

            <li>
                <a href="">
                    <i class="fa fa-user "></i>

                    <span class="text nav-text">Employee</span>

                </a>
                <span class="tooltip">Employee</span>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-sitemap "></i>

                    <span class="text nav-text">Structure</span>

                </a>
                <span class="tooltip">Structure</span>
            </li>

            <li>
                <a href="">
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

        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>

</body>

</html>

