<div class="header">
    <div class="head-contact-infos d-flex">

        <div class="flex-fill text-left"><i class="fas fa-phone fa-1x"></i><span>&nbsp; +1234 567890</span></div>
        <div class="flex-fill text-left"><i class="fas fa-location-arrow fa-1x"></i><span> &nbsp; happyplants@email.com</span></div>
        <div class="flex-fill text-right"><span>3-5 BUSINESS DAYS DELIVERY & FREE RETURNS </span></div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light nav-cus" data-toggle="sticky-onscroll">

    <!--
                 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h2>Front Side</h2>
    </div>
    <div class="flip-box-back">
      <h2>Back Side</h2>
    </div>
  </div>
</div>
-->
    <div class="nav-brand-cus">
        
                    <a class="navbar-brand" href="index.php" style="background-color: #e62a2d ;">HAPPY PLANTS</a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown #myNavbar" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown myNavbar" style="background-color: #e62a2d ;">
        <ul class="navbar-nav">

            <?php
                           if(isset($_SESSION['email'])){
                           ?>

            <li class="nav-item" ><a href="index.php">Home</a></li>
            <li class="nav-item"><a href="products.php">Shop</a></li>
            <li class="nav-item"><a href="settings.php">Settings</a></li>
            <li class="nav-item"><a href="logout.php">Logout</a></li>
            <li class="nav-item nav-cart"><a href="cart.php">Cart <i class="fa fa-shopping-cart" style="font-size:12px"></i></a>
            </li>
            <!--                  class="nav-link head-shop-icon"  <i class="fa fa-shopping-cart" style="font-size:11px"></i>-->

            <?php
                           }else{
                            ?>
            <li class="nav-item"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li class="nav-item"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php
                           }
                           ?>

        </ul>
    </div>


</nav>
