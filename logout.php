<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
    <title>HappyPlants</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- External CSS -->

    <!--    <link rel="stylesheet" href="css/style.css">-->
    <style>
        body {
            background-color: #e62a2d; 
            color: white;
            margin: 0px;
            font-family: "Poppins", Arial, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        p {
            font-size: 12px;
        }


        h3::first-letter,
        h1::first-letter,
        h6::first-letter,
        p::first-letter,
        h4::first-letter,
        a::first-letter {
            text-transform: capitalize;
        }

        a:hover {
            text-decoration: none;
        }

        /*        ***************************************************************/

        .con_logout {
            max-width: 30%;
            margin-left: 9%;
            margin-top: 5%;
            color: white;
        }

        .con_logout a {
            color:#0f0a0a9f; 
            font-weight: 500;
            letter-spacing: 1.1px;
        }

        .con_logout a:hover {
            color: whitesmoke;
        }

        .header {
            max-width: 100%;
            text-transform: uppercase;
        }

        .head-contact-infos {
            max-width: 100%;
            background-color: #0f0a0a9f !important;

            color: white;
            font-size: 12px !important;
            padding: 5px 9%;
            letter-spacing: 0.5px;
        }


        .nav-cus {
            max-width: 100%;
            background-color: white;

        }

        .navbar {
            background-color: #e62a2d;
            padding: 0px 9%;

        }

        .nav-item {
            color: white;
            padding: 25px 2px;
        }


        .nav-brand-cus a {
            font-size: 20px !important;
            font-weight: 900;
            color: white !important;

        }

        .navbar-brand:hover {
            color: #0f0a0a9f !important;
        }



        .navbar-nav a {
            font-size: 14px !important;
            font-weight: 400;
            letter-spacing: 1.2px;
            color: white !important;
            opacity: 0.8;
            padding-left: 22px !important;
            padding-right: 22px !important;

        }

        footer {
            background-color: #101010;
            color: #9d9d9d;
            font-size: 14px;
            font-weight: bold;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

    </style>


</head>

<body>
    <div>
        <?php
                require 'header.php';
            ?>
        <!------------------------message------------------------------>

        <div class="con_logout">
            <div class="alert alert-dark">
                <strong>Seccess!</strong> You have been logged out : <a href="login.php" >Login again.</a>
            </div>
        </div>
        <!--------------------footer------------------------------->
        <footer class="footer">
            <div class="container">
                <center>
                    <p>HAPPYPLANTS@EMAIL.COM.</p>

                </center>
            </div>
        </footer>
    </div>
</body>

</html>
