<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.name,it.price,ut.quantity from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
        //echo "Add items to cart first.";
    ?>
<script>
    window.alert("No items in the cart!!");

</script>
<?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['price']*$row['quantity']; 
       }
    }
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        body {
            background-color:#e62a2d; 
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

        /************************************************************/
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
            color: #1f221fea !important;
        }

        .navbar-brand:hover {
            color: white !important;
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


        /********************************************************************/

        .content-data {
            max-width: 100%;
            padding: 0% 9% !important;
            position: relative;
            margin-top: 3%;
        }

        .table {
            background-color: #e5e9dd;
            max-width: 100%;
            padding: 10% 9% !important;
            position: relative;
        }

        .thead-primary {
            background-color:#0f0a0a9f !important;
            max-width: 100%;
            padding: 40px 10px !important;
            color: white;
            font-size: 16px;
            letter-spacing: 1.1px;
        }
        .table th{
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .table td{
           padding: 2.75rem; 
        }

        .table th,
        .table td {
            vertical-align: middle;
        

        }

        .table .tbody-prod-data p {
            max-width: 100%;
            margin: 1em auto;
            opacity: 0.6;
            font-size: 14px;
            line-height: 2;
        }

        .table .tbody-prod-data {
            width: 30%;

        }

        .tbody-prod-quan {
            width: 20%;

        }

        .tbody-prod-quan p {
            padding: 10%;
            border: 1px solid rgba(0, 0, 0, 0.09);
            margin-bottom: 0px;
        }

        .tbody-pri,
        .tbody-tot {
            font-size: 16px;

        }



        .content-data a {
            color: #0f0a0a9f; 
        }

        .content-data .button {
            background-color: #0f0a0a9f; 

            /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
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

        .content-data .button1 {
            background-color: #0f0a0a9f; 
            color: White;
            border: 2px solid white;
        }

        .content-data .button1:hover {
            background-color: Whitesmoke;
            color: #0f0a0a9f;
        }

        .w3-l-green,.w3-hover-green:hover{
            color:#fff!important;
            background-color:#0f0a0a9f !important;}

    </style>

</head>

<body>
    <div>
        <?php 
               require 'header.php';
            ?>
        <!------------------------------------------------------------------------
        <div class="container">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                    <tr>
                        <th><?php echo $counter ?></th>
                        <th><?php echo $row['name']?></th>
                        <th><?php echo $row['price']?></th>
                        <th><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
                    </tr>
                    <?php $counter=$counter+1;}?>
                    <tr>
                        <th></th>
                        <th>Total</th>
                        <th>Rs <?php echo $sum;?>/-</th>
                        <th><a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a></th>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-------------------------------------------------------------------------------------------->

        <!------------------------ table to store datas of the product------------------------->


        <div class="content-data table-responsive">
            <table class="table text-center table-fixed">
                <thead class="thead-primary">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Product</th>

                        <th>Quantity</th>
                        <th>Price</th>
                        <th>total</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                    <tr>
                        <td><span class="w3-badge w3-large w3-l-green" style="color:white;"><?php echo $counter ?></span></td>
                        <td><?php echo $row['name']?></td>
                        <td class="tbody-prod-quan">
                            <p><?php echo $row['quantity']?></p>
                        </td>
                        <td><?php echo $row['price']?></td>
                        <td class="tbody-prod-quan">
                            <p>1</p>
                        </td>
                        <td><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></td>
                    </tr>
                    <?php $counter=$counter+1;}?>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td class="tbody-prod-quan">
                            <p>Rs <?php echo $sum;?>/-</p>
                        </td>
                        <td><a href="success.php?id=<?php echo $user_id?>" class="button button1">Confirm</a></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!------------------------- End of table to store datas of the product------------------------->

    </div>
</body>

</html>
