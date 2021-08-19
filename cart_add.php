<?php
    require 'connection.php';
    require 'check_if_added.php';
    require 'cart_remove1.php';
    //require 'header.php';
    session_start();
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $quantity=$_GET['qu'];

    if(check_if_added_to_cart($item_id))
    {
    	$query="select quantity from users_items where user_id='$user_id' and item_id='$item_id'";
    	$user_quantity_result=mysqli_query($con,$query) or die(mysqli_error($con));
    	 while($row=mysqli_fetch_array($user_quantity_result)){
       
            $quantity=$quantity+$row['quantity']; 
         
          
       }
         
      	
        $query1="update users_items set quantity='$quantity' where user_id='$user_id' and item_id='$item_id'";
    	$res=mysqli_query($con,$query1) or die(mysqli_error($con));

   header('location: products.php');

    }
    else{
    	 echo $quantity;
    	$add_to_cart_query="insert into users_items(user_id,item_id,quantity,status) values ('$user_id','$item_id','$quantity','Added to cart')";
    
    $add_to_cart_result=mysqli_query($con,$add_to_cart_query) or die(mysqli_error($con));
    header('location: products.php');
    }
    
?>