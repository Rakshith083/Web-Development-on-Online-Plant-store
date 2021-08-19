<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>HappyPlants</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- External CSS -->



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">


    <!-- External CSS -->


    <!--        <link rel="stylesheet" href="css/style.css">-->
    <style>
        body {
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

        /*************************************************************/

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


        /******************************************************/
        .header-img {
            max-width: 100%;
            position: relative;
        }

        .header-img .carousel-inner img {
            width: 100% !important;
            height: 550px !important;
            object-fit: cover;

            border-radius: 0px;
            filter: brightness(70%);
            margin: 0px;
        }

        .carousel-fade .carousel-item {
            transition-timing-function: ease-in-out;
        }

        .sticky.is-sticky {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            z-index: 1000;
            width: 100%;
            margin: 0px;
        }

        .is-sticky .navbar-brand {
            color: black !important;
        }

        .is-sticky .navbar .navbar-nav .nav-item a {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .is-sticky .nav-cart {
            background-color: #82ae46 !important;
            color: white !important;
        }

        .drop-cus:hover>.dropdown-menu {
            display: block;
        }

        .centered {
            max-width: 60%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-family: "Comic Sans MS";

        }

        .centered .first-capital {
            font-size: 60px;

        }

        .centered h6 {
            font-family: "Amatic SC", cursive;
            line-height: 1.3;
            font-size: 49px;
            font-weight: 100 !important;
            text-align: center;
        }

        .centered p {
            letter-spacing: 3px;
            font-weight: 100;
        }

        .centered button {
            background-color: #e62a2d !important;
            color: white;
            font-size: 20px !important;
            letter-spacing: 1px;

        }

        /*************************************************************/


        .content-areas {
            max-width: 80%;
            margin: 7% auto 5% auto;
            text-transform: uppercase;
            font-family: "Poppins", Arial, sans-serif;
        }

        .content-areas img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            opacity: 0.6;
            margin-bottom: 5%;
        }

        .content-areas img:hover {
            opacity: 1;
        }

        .content-areas h6 {
            font-size: 15px !important;
            font-weight: 600 !important;
            margin-bottom: 5%;

        }

        .content-areas p {
            opacity: 0.5;
            font-size: 10px !important;
            font-weight: 750;
        }

        .content-areas .bg_content {
            background-color: #e4b2d6;
            padding: 10px;
            "

        }

        /*************************************************************/

        .content-carousel {
            max-width: 100%;
            position: relative;
            margin: 7% 9% 7% 9%;
        }

        .content-carousel .carousel-info {
            margin: 5%;
        }

        .content-carousel .carousel-inner {
            margin-top: 10%;
        }

        .content-carousel .carousel-info h3 {
            color: #82ae46 !important;
            font-family: "Comic Sans MS";
            font-size: 18px;
            margin-bottom: 15px;
        }

        .content-carousel .carousel-info h6 {
            max-width: 60%;
            opacity: 0.7;
            font-family: "Poppins", Arial, sans-serif;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 0.5px;
            line-height: 1.8;
            margin: 2% auto;
        }

        .content-carousel .carousel-inner img {
            border-radius: 50%;
            width: 120px !important;
            margin: 10% auto;
        }

        .content-carousel .card {
            border: none;
        }

        .content-carousel .card:after {
            content: "";
            position: absolute;
            left: 1px;

            top: 37.5%;
            width: 1px;
            height: 25%;

            border-left: 1px solid black;
            opacity: 0.1;

        }

        .content-carousel .card:before {
            content: "";
            position: absolute;
            left: 0px;

            top: 46.5%;
            width: 1px;
            height: 7%;

            border-left: 3px solid #82ae46;
        }

        .content-carousel .card-body .card-text {
            max-width: 80%;
            letter-spacing: 0.5px;
            font-weight: 400;
            font-size: 15px;
            opacity: 0.9;
            line-height: 1.8;
            font-family: "Poppins", Arial, sans-serif;
            margin: 0px auto;
        }

        .content-carousel .card-body .card-title {
            margin-top: 30px;
            font-size: 20px !important;
            font-weight: 400 !important;
            font-family: "Poppins", Arial, sans-serif;
        }

        .content-carousel .card-body .title-text {
            text-transform: uppercase;
            letter-spacing: 1.1px;
            font-family: "Poppins", Arial, sans-serif;
        }

        .content-carousel .carousel-indicators {
            position: relative;
            margin: 5%;
        }

        .content-carousel .carousel-indicators li {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin: 5px;
            text-indent: 0;
            cursor: pointer;
            border: none;
            border-radius: 50%;
            background-color: rgb(128, 128, 128);
        }

        .content-carousel .carousel-indicators .active {
            width: 10px;
            height: 10px;
            margin: 5px;
            background-color: #82ae46 !important;


        }


        /**********************************************************************************/

    </style>



</head>

<body style="background-color:#e62a2d; color: white">


    <!------------------------------header -------------------------------------------------------->
    <div>
        <?php
            require 'header.php';
           ?>


        <!-- header img-------------------------------------------------------------------------->


        <div class="header-img">


            <div id="demo" class="carousel carousel-fade" data-ride="carousel" data-interval="1000">

                <div class="carousel-inner cus-carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/bg_2.png" alt="Los Angeles">
                        <div class="centered"><br><br><br><br><br><br><br><br>
                            <a href="products.php"><button type="button" class="btn badge-pill mx-auto d-block">Shop Now</button></a>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/bg_1.png" alt="Chicago">
                        <div class="centered"> <br><br><br><br><br><br><br><br>
                            <button type="button" class="btn badge-pill mx-auto d-block">View Details</button>

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!---------------------------------------Features------------------------------>

        <div class="content-areas">
            <div class="d-flex text-center">
                <div class="flex-fill wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="img/shipped.png" alt="Snow" class="bg_content" style="background-color:#dcc698">
                    <h6>Free Shiping</h6>
                    <p class="text-center">ON ORDER OVER 400RS</p>
                </div>



                <div class="flex-fill wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                    <img src="img/diet.png" alt="Snow" class="bg_content">
                    <h6>ALWAYS FRESH</h6>
                    <p class="text-center">PRODUCT WELL PACKAGE</p>
                </div>



                <div class="flex-fill wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                    <img src="img/sq.png" alt="Snow" class="bg_content" style="background-color:#a2d1e1">
                    <h6>Superior Quality</h6>
                    <p class="text-center">QUALITY PRODUCTS</p>
                </div>



                <div class="flex-fill wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                    <img src="img/support.png" alt="Snow" class="bg_content" style="background-color:coral">
                    <h6>Support</h6>
                    <p class="text-center">24/7 SUPPORT</p>

                </div>
            </div>

        </div>



        
        <!-- ------------------------------------------------------------------------------------ -->

        <footer class="footer">
            <div class="container">
                <center>
                    <p>Plants Make the earth glow.</p>

                </center>
            </div>
        </footer>
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
