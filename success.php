<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HappyPlants</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <!--link rel="stylesheet" href="css/style.css" type="text/css"-->

    </head>
<style type="text/css">
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

#bannerImage {
    padding-top: 75px;
    padding-bottom: 50px;
    margin-bottom: 20px;
    text-align: center;
    color: #f8f8f8;
    background: url(../img/bg_2.jpg);
    background-size: cover;
}

#bannerContent {
    position: relative;
    padding-top: 6%;
    padding-bottom: 6%;
    margin-top: 12%;
    margin-bottom: 12%;
    background-color: rgba(0, 0, 0, 0.7);
    max-width: 660px;
}

    footer {
        background-color: #101010;
        color: #9d9d9d;
        font-size: 14px;
        font-weight: bold;
        padding: 10px;
        bottom: 0;
    }

    /*
    html { 
        min-height:100%;
        position:relative;    
    } 
    */

    .footer {
        position: absolute;
        bottom: 0;
        right: 0;
        left: 0;
    }

    @media (min-width:320px) {
        #autoResize {
            font-size: 12px;
        }
    }
</style>

    <body style="background-color: #e62a2d;">
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <center>
                <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body" style="background-color : #101010; color: white;">
                                <p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </center>
            <footer class="footer">
               <div class="container">
                <center>
                   <p>Web project By</p>
                   <p>ADARSH SM : 4JN16CS002 , RAKSHITH N : 4JN17CS067 , PAVAN KUMAR H : 4JN18CS412</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
