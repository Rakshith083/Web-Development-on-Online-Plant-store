<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>HappyPlants</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">



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

        /******************************************************************************/

        .container {
            max-width: 100%;
            padding: 0px;
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

        .navbar {
            background-color: #e62a2d;
            padding: 0px 9%;

        }

        .nav-item{
            color: white !important;
            background-color: #e62a2d;
            padding: 25px 0px;
        }

        .nav-item {
            color: white;
            padding: 25px 2px;
        }

        .navbar-brand:hover {
            color: white !important;
        }

        .nav-brand-cus a {
            font-size: 20px !important;
            font-weight: 900;
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

        .hero-img {
            max-width: 100%;
            position: relative;
            background-image: url(img/bg-h.jpg);
            padding: 10em 0;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            margin-bottom: 5rem;
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
            max-width: 100%;
            margin: 0px;
        }

        .is-sticky .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0,0.5)' stroke-max-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E") !important;
            height: 25px;
            width: 25px;

        }

        .is-sticky .navbar-toggler .toggler-text {
            position: relative;
            top: 1px;
            font-size: 20px;
            color: black !important;
            opacity: 0.5;
        }

        .is-sticky .navbar-toggler {
            background-color: #0f0a0a9f !important;
            border: none;
            padding-right: 0px;
        }

        .is-sticky .navbar-brand {
            color: white !important;
        }

        .is-sticky .navbar-nav .nav-item a {
            padding-top: 20px;
            padding-bottom: 20px;
            color:white;
            background-color: #0f0a0a9f !important;
        }

        .is-sticky .nav-cart {
            color: white !important;
        }


        .is-sticky .dropdown-menu {
            color: white;
            border: none;
        }

        .drop-cus:hover>.dropdown-menu {
            display: block;
            color:white;
            background-color: #0f0a0a9f !important;
        }

        .centered {
            max-width: 60%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white !important;
            font-family: "Comic Sans MS";

        }

        .centered .first-capital {
            font-size: 60px;

        }

        .centered h6 {
            font-family: "Amatic SC", cursive;
            line-height: 1.3;
            font-size: 44px;
            font-weight: 100;
            text-align: center;
        }

        .centered p {
            letter-spacing: 3px;
            font-weight: 100;
        }

        .centered button {
            background-color: #0f0a0a9f;
            color: white;
            font-size: 20px;
            letter-spacing: 1px;
            line-height: 2 !important;
        }


        /*************************************************************/



        .content-products {
            display: inline-block;
            position: relative;
            max-width: 100%;
            margin: 1% 10% 0% 10%;
        }

        .prod-para {
            font-size: 13px;
            font-weight: 300;
            color: #0f0a0a9f; 
            letter-spacing: 1px;
            font-family: "Lora", Georgia, serif;
        }

        .content-products .row {
            display: flex;
            flex-wrap: wrap;
            padding: 0px 0px;
            margin: 0px;
            text-transform: uppercase;
        }

        .content-products .row .products {

            padding: 0px;
            margin: 1.3% 1.3%;
        }

        .content-products .row .products .prod-border {
            max-width: 100%;
            min-height: 100%;

            border: 1px solid #f0f0f0;
            position: relative;
            margin: 0px;
            overflow: hidden;

        }

        .content-products .row .products .prod-border:hover {
            cursor: pointer;
        }

        .products .text-vis-hover {
            display: none;
            transition: all 0.3s ease;
        }

        .products:hover .text-vis-hover {

            display: inline;
            overflow: hidden;
            transition: opacity 0.2s 1s ease;
        }

        .products:hover .text-hide-hover {
            display: none;
        }

        .products .prod-border .prod-info {
            padding-top: 10px;
        }


        .content-products .row img {

            max-width: 100%;
            min-height: 75%;
            position: relative;
            margin-bottom: 1%;
        }


        .content-products .row img:hover {
            transform: scale(1.1);
            transition: all 0.3s ease;
        }

        .products p,
        .products span {
            color: white; 
            font-size: 12px;
            padding: 0% 0% 8% 0%;
        }

        .products a:hover {
            text-decoration: none;
        }

        .products .prod-info h4 {
            margin: 0px;
            color: black;
            font-size: 14px;

            padding-bottom: 10px;
        }

        .products strike {
            color: gray;
            opacity: 0.6;
            font-size: 12px;
        }

        .content-products .row .text-caption {
            position: absolute;
            top: 0%;
            left: -1px;
            background-color: #e62a2d;

            padding: 5px 10px;
            margin: 0px;

        }

        .products .text-caption .percent {
            font-size: 14px;
            margin-bottom: 0px;
            letter-spacing: 1px;
            opacity: 0.9;
            color: #0f0a0a9f; 
        }

        .products .prod-border .text-vis-hover a {
            display: inline-block;
            max-width: 40px;
            min-height: 40px;
            background-color: #82ae46;
            position: relative;
            border-radius: 50%;
            margin-right: 1%;
            color: white;
        }

        .products .text-vis-hover i {
            font-size: 12px;
            position: absolute;
            top: 37%;
            left: 34%;
        }

        center {
            padding-top: 2%;
        }

        /**********************************************************************/

        footer {
            max-width: 100%;
            margin: 13% 9% 0% 9%;
            letter-spacing: 1px;
            text-transform: lowercase;
            
        }

        footer .row {
            max-width: 100%;
            margin: 0px;
        }

        footer h4 {
            font-size: 1rem;
            font-weight: 650;
            text-align: left !important;
            margin-bottom: 8%;
            letter-spacing: 1.2px;
        }

        footer .col-sm-3,
        footer .col-sm-4 {
            padding: 0%;
            margin-top: 1%;
        }

        footer .col-sm-2 {
            float: left;
            padding: 0%;
            margin-top: 1%;
        }

        footer .nature-para {
            max-width: 100%;
            font-size: 14px;

            font-weight: 400;
            padding-top: 1%;
            line-height: 2;
        }

        .list-cus-pad,
        .Menu-list {
            background-color: #e62a2d;
            padding: 0% 30%;
            
        }

        .Menu-list {
            margin-bottom: 12%;
        }

        footer .p-2 {
            padding-left: 0% !important;
        }

        footer .list-group {

            list-style-type: none;
            text-align: left;
            padding: 0%;

        }

        footer .list-group a {

            line-height: 3;
            border: none;
            padding-left: 0px;
            color: #333;
            font-size: 14px;

            font-weight: 400 !important;
            line-height: 2.4;
            padding: 0%;

        }

        .footer-info {
            max-width: 100%;
            padding-top: 5%;
            text-align: left;
            line-height: 4;
        }


        .footer-col-logos a {
            color: black;
        }

        .footer-change-size {
            font-size: 15px;
            margin-right: 9%;
        }

        footer .list-group-gap {
            margin-left: 127%;
        }

        .footer-col-gap {
            padding-right: 10%;
        }

        .footer-info span {
            font-size: 14px;
            font-weight: 400 !important;
            line-height: 2.4;
            text-align: justify !important;
        }

        .footer-info p {
            margin-bottom: 0px;
            line-height: 1;
        }

        .change-size-footer {
            font-size: 25px;
        }

        .logos-cus-info {
            margin-top: 30%;
        }

        footer .logos-cus-info a {
            background-color: rgba(242, 242, 242, 0.7);

            border-radius: 50%;
            margin-right: 2%;

            position: relative;
            width: 50px;

            height: 50px;
            display: inline-block;
            vertical-align: middle;
            text-align: center;
        }

        footer .logos-cus-info a i {
            position: relative;
            top: 50%;
            left: 25%;
            transform: translate(-50%, -50%)
        }

        .footer-copyright {
            margin: 3% 0% 2%;
        }

        .footer-copyright p {
            color: whitesmoke;
            font-size: 14px;
            font-weight: 400 !important;
        }

        .brought-by-footer {
            color: #82ae46 !important;
            text-transform: capitalize;
        }





        /******************************************************/

    </style>

</head>

<body style="background-color: #e62a2d; color: white;">

    <div class="container">



        <div class="header">
            

            <!------------------------------ Header and Navigation Bar ----------------------------->
            <?php
                require 'header.php';
            ?>




            <!----------------------------------------Hero image--------------------------------->

            <section class="content-hero-img">

                <div class="hero-img">
                    <div class="centered">

                        <br><br><br><br><br><br><br><br>
                        <h6 style="background-color:#0f0a0a9f; color: white;">Happiness is growing gardens</h6>



                    </div>



                </div>

            </section>


            <!----------------------------------------------End Hero image--------------------------------->

  
            <!--------------------------------------- Products ----------------------------------------------------->

            <div class="content-products">


                <div class="row text-center">
                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="prod-border">
                            <a>
                                <img id='img1' src="img/plant-1.jpg" alt="plant-1" onmouseout="document.getElementById(111).innerHTML='Price: Rs. 1,287'" onmouseover="description1()">
                            </a>
                            <center>
                                <div class="caption" >
                                    <h4>5 Best Indoor Plants Pack</h4>
                                    <p id=111>Price: Rs. 1,287</p>
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min=1 max=10 placeholder="1-10">
                                        </div>
                                        <div class="p-2 flex-fill">
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a id="11" href="cart_add.php?id=1" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="1" href="cart_add.php?id=1" class="btn btn-block btn-primary" onclick="return eventhandle(this.id);" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>


                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="prod-border">
                            <a>
                                <img src="img/plant-2.jpg" alt="Sony DSLR" onmouseover="description2()" onmouseout="document.getElementById(222).innerHTML='Price: Rs. 599'">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Peace Lily (White Cream)</h4>
                                    <p id=222 >Price: Rs. 599</p>
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min="1" max="10">
                                        </div>
                                        <div class="p-2 flex-fill">
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a id="22" href="cart_add.php?id=2" onclick="return eventhandle(this.id);"  class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="2" href="cart_add.php?id=2" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>


                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="prod-border">
                            <a>
                                <img src="img/3.webp" alt="Sony DSLR" onmouseover="description3()" onmouseout="document.getElementById(333).innerHTML='Price: Rs 300'">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Crocus Flower Record (Purple) </h4>
                                    <p id=333>Price: Rs 300</p>
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min="1" max="10">
                                        </div>
                                        <div class="p-2 flex-fill">
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a id="33" href="cart_add.php?id=3" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="3" href="cart_add.php?id=3" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>

                    </div>

                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="prod-border">
                            <a>
                                <img src="img/4.webp" alt="Olympus" onmouseover="description4()" onmouseout="document.getElementById(444).innerHTML='Price: Rs 450'">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Daffodil Replete (White, Orange)</h4>
                                    <p id=444 >Price: Rs 450</p>
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min="1" max="10">
                                        </div>
                                        <div class="p-2 flex-fill">
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a id="44" href="cart_add.php?id=4" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="4" href="cart_add.php?id=4" onclick="return eventhandle(this.id);"  class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>


                <div class="row text-center">
                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="prod-border">
                            <a>
                                <img src="img/5.jpg" alt="Titan 301" onmouseover="description5()" onmouseout="document.getElementById(555).innerHTML='Price: Rs 300'">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Iris Apollo (White, Yellow)</h4>
                                    <p id=555>Price: Rs. 300</p>
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min="1" max="10">
                                        </div>
                                        <div class="p-2 flex-fill">
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a id="55" href="cart_add.php?id=5" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="5" href="cart_add.php?id=5" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="prod-border">
                            <a>
                                <img src="img/6.jpg" alt="Titan 201" onmouseover="description6()" onmouseout="document.getElementById(666).innerHTML='Price: Rs 800'">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Ginger lily Red Hedychium Butterfly bulbs</h4>
                                    <p id=666>Price: Rs. 800</p>
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min="1" max="10">
                                        </div>
                                        <div class="p-2 flex-fill">
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a id="66" href="cart_add.php?id=6" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="6" href="cart_add.php?id=6"  onclick="return eventhandle(this.id);" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="prod-border">
                            <a>
                                <img src="img/7.jpg" alt="htm milan" onmouseover="description7()" onmouseout="document.getElementById(777).innerHTML='Price: Rs 350'">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Hemerocallis, Day Lily</h4>
                                    <p id=777 >Price: Rs. 350</p>
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min="1" max="10">
                                        </div>
                                        <div class="p-2 flex-fill">
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a id="77" href="cart_add.php?id=7" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="7" href="cart_add.php?id=7" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="prod-border">
                            <a>
                                <img src="img/8.jpg" alt="Favre Leuba" onmouseover="description8()" onmouseout="document.getElementById(888).innerHTML='Price: Rs 450'">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Hyacinth (Random Color) - Bulbs</h4>
                                    <p id=888>Price: Rs. 450</p>
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min="1" max="10">
                                        </div>
                                        <div class="p-2 flex-fill">
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a id="88" href="cart_add.php?id=8" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="8" href="cart_add.php?id=8" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>



                <div class="row text-center">
                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="prod-border">
                            <a>
                                <img src="img/9.jpg" alt="Raymond shirt" onmouseover="description9()" onmouseout="document.getElementById(999).innerHTML='Price: Rs 300'">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Alium (Random Color) - Bulbs</h4>
                                    <p id=999>Price: Rs. 300</p>
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min="1" max="10">
                                        </div>
                                        <div class="p-2 flex-fill">
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a id="99" href="cart_add.php?id=9" onclick="return eventhandle(this.id);"  class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="9" href="cart_add.php?id=9" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="prod-border">
                            <a>
                                <img src="img/10.jpg" alt="Charles shirt" onmouseover="description10()" onmouseout="document.getElementById(100).innerHTML='Price: Rs 300'">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Muscari, Grape Hyacinth (Random Color) - Bulbs</h4>
                                    <p id=100>Price: Rs. 330</p>
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min="1" max="10">
                                        </div>
                                        <div class="p-2 flex-fill">
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a id="100" href="cart_add.php?id=10" onclick="return eventhandle(this.id);"  class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="10" href="cart_add.php?id=10" onclick="return eventhandle(this.id);"  class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="prod-border">
                            <a>
                                <img src="img/11.jpg" alt="HXR" onmouseover="description11()" onmouseout="document.getElementById(101).innerHTML='Price: Rs 850'">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Ixora Dwarf (Peach) - Plant</h4>
                                    <p id=101>Price: Rs. 850</p>
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min="1" max="10">
                                        </div>
                                        <div class="p-2 flex-fill">
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a id="111" href="cart_add.php?id=11" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="11" href="cart_add.php?id=11" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="prod-border">
                            <a>
                                <img src="img/12.jpg" alt="PINK" onmouseover="description12()" onmouseout="document.getElementById(102).innerHTML='Price: Rs 300'">
                            </a>
                            <center>
                                <div class="Lantana camara (Yellow) - Plant">
                                    <h4>Chilli</h4>
                                    <p id=102>Price: Rs. 450</p>

                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min="1" max="10">
                                        </div>
                                        <div class="p-2 flex-fill">


                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a id="122" href="cart_add.php?id=12" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="12" href="cart_add.php?id=12" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>

                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="prod-border">
                            <a>
                                <img src="img/13.jpg" alt="Titan 301" onmouseover="description13()" onmouseout="document.getElementById(103).innerHTML='Price: Rs 340'">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Drunken sailor, Rangoon creeper</h4>
                                    <p id=103 >Price: Rs. 340</p>
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min="1" max="10">
                                        </div>
                                        <div class="p-2 flex-fill">
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(13)){
                                                echo '<a id="133" href="cart_add.php?id=13" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="133" href="cart_add.php?id=13" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="prod-border">
                            <a>
                                <img src="img/14.jpg" alt="Titan 201" onmouseover="description14()" onmouseout="document.getElementById(104).innerHTML='Price: Rs 500'">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Lantana (Variegated, Red, Haldi Kumkum) - Plant</h4>
                                    <p id=104>Price: Rs. 500</p>
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min="1" max="10">
                                        </div>
                                        <div class="p-2 flex-fill">
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(14)){
                                                echo '<a id="144" href="cart_add.php?id=14" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="144" href="cart_add.php?id=14"  onclick="return eventhandle(this.id);" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="prod-border">
                            <a>
                                <img src="img/15.jpg" alt="htm milan" onmouseover="description15()" onmouseout="document.getElementById(105).innerHTML='Price: Rs 350'">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Bougainvillea glabra mauve queen - Plant</h4>
                                    <p id=105 >Price: Rs. 350</p>
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min="1" max="10">
                                        </div>
                                        <div class="p-2 flex-fill">
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a id="155" href="cart_add.php?id=15" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="155" href="cart_add.php?id=15" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm products wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="prod-border">
                            <a>
                                <img src="img/16.jpg" alt="Favre Leuba" onmouseover="description16()" onmouseout="document.getElementById(106).innerHTML='Price: Rs 450'">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Bougainvillea (Pink) - Plant</h4>
                                    <p id=106>Price: Rs. 490</p>
                                    <div class="d-flex">
                                        <div class="p-2 flex-fill">
                                            <input type="number" name="quantity" min="1" max="10">
                                        </div>
                                        <div class="p-2 flex-fill">
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(16)){
                                                echo '<a id="106" href="cart_add.php?id=16" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary" class="btn btn-block btr-primary">Add more</a>';
                                            }else{
                                                ?>
                                            <a id="106" href="cart_add.php?id=16" onclick="return eventhandle(this.id);" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                            <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--------------------------------------footer-------------------------------------------->

    <footer>

        <div class="row text-center">

            <div class="col-sm-4 text-left footer-col-gap">

                <h4>HappyPlants</h4>
                <p class="nature-para">Having plants in our homes or in our offices doesn’t just look good, it also boosts our mood, makes us more productive, and cleans the air around us by absorbing toxins

Most of us being urban dwellers spending their days in apartments with limited access to parks and ecological reserves, have no way of feeling close to nature and experiencing the benefits of being around plants.

Ordering a pizza is easy but ever heard of ordering a plant to your doorstep? This is where nurserylive comes in.

We believe that Green is Good and are here to enable Indians to access plants in the easiest way possible – online! We are here to shape the future of gardening!.</p>

                <div class="logos-cus-info wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <a><i class="fab fa-twitter change-size-footer"></i></a>
                    <a><i class="fab fa-facebook-square change-size-footer"></i></a>
                    <a><i class="fab fa-google-plus change-size-footer"></i></a>

                </div>

            </div>


            <div class="col-sm-2">

            </div>

        </div>
        
        <div class="footer-copyright"><hr>
            <p class="text-center">Plants Make the earth glow.</p>
        </div>


    </footer>

    <!--------------------------------------End of footer-------------------------------------------->
<script>
    
    function eventhandle(id){
        
        //x.innerHTML="hiiiii";
        var cur=document.getElementById(id);
        var p=cur.parentNode.parentNode;
        var c=p.childNodes;
        var j;
        for(var i=0;i<c.length;i++)
        {
          
            if(c[i].nodeName=="DIV")
            {
                 
                 j=i;
                break;
            }
        }
        var cc=c[j].childNodes;
          for(var i=0;i<cc.length;i++)
        {
            if(cc[i].nodeName=="INPUT")
            {
               quant=cc[i].value;
               break;
            }
        }
      //  alert(cur.href);
        cur.href+="&qu="+quant;
        // alert(cur.href);
     
}
</script>

<script type="text/javascript">
    function description1(){
        //document.getElementById('img1').src="img/img1.png";
        document.getElementById(111).innerHTML="DESCRIPTION : This plants pack contains amazing 5 houseplants + 5 Pots. Surround your home with these best pollution killer plants for a clean and healthy environment.";
    }

    function description2(){
        //document.getElementById('img1').src="img/img1.png";
        document.getElementById(222).innerHTML="DESCRIPTION : Peace Lily - Spethiphyllum Wallisii Plant is a great plant for those starting out as first-time plant parents. Peace Lily - Spethiphyllum Wallisii is a very easy & low maintenance plant that literally could be cultivated anywhere: bathroom, bedroom, office desk, dining table, bookshelf or kitchen.";
    }

    function description3(){
        //document.getElementById('img1').src="img/img1.png";
        document.getElementById(333).innerHTML="Crocuses are also one of the easiest cold-hardy bulbs to force for indoor bloom.Crocus plants are a bulbous, perennial with globular corms, having 15 to 20 cm plant height.";
    }

    function description4(){
        //document.getElementById('img1').src="img/img1.png";
        document.getElementById(444).innerHTML="Daffodil is spring-blooming perennial plants of the Amaryllidaceae family. Daffodil flowers have a trumpet-shaped structure set against a star-shaped background. The plant stem usually bears a solitary flower, but occasionally a cluster of flowers (umbel).";
    }

    function description5(){
        var str="Iris is a genus of flowering plants with showy flowers.Irises are perennial plants, growing from creeping rhizomes or, in drier climates, from bulbs. They have long, erect flowering stems which may be simple or branched, solid or hollow, and flattened or circular.Irises usually have 3 to 10 basal sword-shaped leaves growing in dense clumps";
        //document.getElementById('img1').src="img/img1.png";
        document.getElementById(555).innerHTML=str;
    }

    function description6(){
        var str="Iris is a genus of flowering plants with showy flowers.Irises are perennial plants, growing from creeping rhizomes or, in drier climates, from bulbs. They have long, erect flowering stems which may be simple or branched, solid or hollow, and flattened or circular.Irises usually have 3 to 10 basal sword-shaped leaves growing in dense clumps";
        //document.getElementById('img1').src="img/img1.png";
        document.getElementById(666).innerHTML=str;
    }

    function description7(){
        var str="A daylily or day lily is a flowering plant in the genus Hemerocallis /ˌhɛmɪroʊˈkælɪs/, a member of the family Asphodelaceae, subfamily Hemerocallidoideae. Despite the common name, it is not in fact a lily. Gardening enthusiasts and horticulturists have long bred daylily species for their attractive flowers.";
        document.getElementById(777).innerHTML=str;
    }

    function description8(){
        var str="Hyacinths bloom in early spring that fill the air with scent and drench the landscape in color.Hyacinth Fondant is truly a dazzler and is known for its fragrant and attractive flowers. A dense spike of fragrant florets surrounded by green sword-like foliage that should be planted along walkways to maximize your enjoyment";
        document.getElementById(888).innerHTML=str;
    }

    function description9(){
        var str="Many little blossoms in bright colors agglomerate on a strong peduncle to a big round fluorescence. This allium inflorescence is an eye-catcher.Allium, also called Ornamental Onion, is one of the most interesting blooms in the spring and summer garden. With a spherical shape flower that holds its form throughout the season, it is one of the long lasting blooms to be had from a bulb.";
        document.getElementById(999).innerHTML=str;
    }

    function description10(){
        var str="Muscari blooms bright, attractive flowers produce a light, pleasant scent. Blooming time produce the beautiful screening in the garden.Muscari have one or more narrow leaves than Hyacinth which arise from a bulb. The flowers appear in the spring and form a spike or raceme, being held in a close or loose spiral around a central stalk.";
        document.getElementById(100).innerHTML=str;
    }

    function description11(){
        var str="he Ixora plant is loved by many because it produces clusters of star-shaped flowers all year round. Each cluster is consists of flowers that comes in red, yellow, pink,orange or peach in color.Ixora is one of the most colorful flowering and hedge plants available.Most will grow in sun or shade and have flowers in massed heads throughout the yearIxora is a genus of flowering plants in the Rubiaceae family. It consists of tropical evergreen trees and shrubs and holds around 500 species. Though native to the tropical and subtropical areas throughout the world, its center of diversity is in Tropical Asia.";
        document.getElementById(101).innerHTML=str;
    }

    function description12(){
        var str="Lantana plants are very fragrant, you can boost the garden beauty with yellow color flowers.In frost-free climates, its a great perennial ground cover, as well. Lantana is a genus of about 150 species of perennial flowering plants in the verbena family, Verbenaceae.Lantana plant grows up to 24 inches tall with a spread of up to 4 feet. Plant blooms in summer to fall season.";
        document.getElementById(102).innerHTML=str;
    }

    function description13(){
        var str="Rangoon Creepers is a vine with red flower clusters and native to tropical Asia. It can get at least four hours of sun every day and can take the support of something to grow and spread. The plant does not require heavy fertilizer. Rangoon Creepers are a special kind of flowering vines that change in color with age. In a mature creeper, the stem becomes woody and thorns appear. Once established, it hardly dies. It is very useful in covering fences, supports, and walls.";
        document.getElementById(103).innerHTML=str;
    }

    function description14(){
        var str="antana (Variegated, Red, Haldi Kumkum) - Plant,    6 inch (15 cm) Grower Round Plastic Pot (Black)";
        document.getElementById(104).innerHTML=str;
    }

    function description15(){
        var str="Bougainvilleas love hot, dry, sunny spaces and they seem to perform better when slightly neglected, so don t be to attentive to your plant and it should thrive. Water thoroughly and then allow the top inch or two of soil to dry out before you water again. The easiest way to test the soil moisture content is to stick your finger into it.Bougainvillea is a genus of thorny ornamental vines, bushes, and trees with flower-like spring leaves near its flowers. Different authors accept between four and 18 species in the genus.";
        document.getElementById(105).innerHTML=str;
    }

    function description16(){
        var str="Bougainvillea is a genus of thorny ornamental vines, bushes, and trees with flower-like spring leaves near its flowers.It is a semi-climber and can be grown as a hedge, a shrub, a climber over a sunny wall and also in pots.Bougainvilleas have beautiful, brightly colored bracts, which are specialized leaves that contain the plants flowers.";
        document.getElementById(106).innerHTML=str;
    }
    /*function mouseout1(){
        document.getElementById('img1').scr="img/plant-1.jpg";
        document.getElementById(111).innerHTML='Price: Rs. 1,287';
    }*/
</script>


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
