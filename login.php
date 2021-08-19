<?php
    require 'connection.php';
    session_start();
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

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

        /****************************************************************/
        .container {
            max-width: 100%;
            padding: 0px;
            margin: 0px;
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
            color: #0f0a0a9f !important;

        }

        .navbar-brand:hover {
            color: Whitesmoke !important;
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

        /***************************************************/
        .pass_change input[type="password"],
        .pass_change input[type="email"] {
            border-radius: 0px;
            height: 50px !important;
            padding-left: 10px;
            padding-right: 15px;
            color: Black !important;
            font-size: 14px;
            border: 1px solid rgba(0, 0, 0, 0.1) !important;
        }

        .pass_change h1 {
            color: whitesmoke;
            text-shadow: 2px 2px 5px #0f0a0a9f; 
            margin: 8% 0px;
        }

        .pass_change {
            margin: 0px 9%;
        }

        .pass_change .button {
            background-color:#0f0a0a9f;
            /* Green */
            border: none;
            color: white;
            padding: 10px 34px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s;
            /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .pass_change .button1 {
            background-color: #0f0a0a9f;
            color: White;
            border: 2px solid whitesmoke;
        }

        .pass_change .button1:hover {
            background-color: whitesmoke;
            color: #0f0a0a9f;
        }

        .panel-footer a {
            color: #0f0a0a9f; ;
        }

        .panel-footer a:hover {
            color: black;
        }
        .icon {
            
            color: white;
            min-width: 30px;
            text-align: center;
        }

        .cus-pd {
            margin: 20px 0px;
        }

    </style>


</head>

<body>
    <div>
        <?php
                require 'header.php';
            ?>

        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary pass_change">
                        <div class="panel-heading">
                            <h1>LOGIN</h1>
                        </div>
                        <div class="panel-body">

                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-envelope icon"></i></span>
                                        </div>
                                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" size="50">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password (min. 6 characters)" pattern=".{6,}" id="myInput">

                                    <div class="custom-control custom-checkbox mb-3 cus-pd">
                                        <input type="checkbox" class="custom-control-input" id="customCheck" name="example1" onclick="mypd()">
                                        <label class="custom-control-label" for="customCheck"> Show Password</label>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Login" class="button button1">
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">Don't have an account yet? <a href="signup.php">Register</a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="wow.min.js"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="func.js"></script>
</body>

</html>
