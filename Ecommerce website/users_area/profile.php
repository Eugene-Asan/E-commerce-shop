<?php
include('../include/connect.php');
include('../function/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $_SESSION['username'] ?> </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  
  <!--cdn links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="../style.css">
  <!--Script js link-->
  <style>
    body{
      overflow-x:hidden;
    }
    .profile_image{
    width: 25%;
    height:60%;
    margin:auto;
    display: block;
    
    border-radius:50%;
}
  </style>
</head>
<body>
  <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar bg-warning">
  <div class="container-fluid">
    <img src="./images/apple.jpg" alt="" class = "logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">My Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cart.php"><i class="fa-solid fa-cart-plus"></i><sup><?php
        cart_item(); ?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: GHS<?php total_cart_price(); ?></a>
        </li>
        
      </ul>
      <form class="d-flex" action="../search_product.php" method ="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name = "search_data">
       <!--
        <button class="btn btn-outline-light" type="submit">Search</button>
        -->
        <input type="submit"value = "Search class" class = "btn btn-outline-light" name = "search_data_product">
      </form>
    </div>
  </div>
</nav>
<!--calling cart function-->
<?php
cart();

?>
<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
  <!-- <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li> -->
       
        <?php
if(!isset($_SESSION['username'])){
  echo"<li class='nav-item'>
  <a class='nav-link' href='#'>Welcome Guest</a>
</li>";
}else{
  echo"<li class='nav-item'>
  <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
</li>";
}

if(!isset($_SESSION['username'])){
  echo"<li class='nav-item'>
  <a class='nav-link' href='./users_area/user_login.php'>Login</a>
</li>";
}else{
  echo"<li class='nav-item'>
  <a class='nav-link' href='./users_area/logout.php'>Logout</a>
</li>";
}
        ?>
  </ul>
</nav>

<!-- third child -->
<div class="bg-warning">
  <h3 class="text-center">G-7 Online Store</h3>
  <p class="text-center">Shop Smarter, Not Harder, at G-7 Online Store!</p>
</div>
<div>
<?php get_user_order_details();
if(isset($_GET['edit_account'])){
  include('edit_account.php');
} 
if(isset($_GET['my_orders'])){
  include('user_orders.php');
} 

?>
</div>
<!-- fouth child -->
<div class="row">
    <div class="col-md-2 right">
<ul class="navbar-nav bg-secondary text-center" style="height:100vh">
<li class="nav-item bg-warning">
          <a class="nav-link text-light"  href="#"><h4>Your profile</h4></a>
        </li>

<?php

$username = $_SESSION['username'];
$user_image = "Select * from `user_table` where username='$username'";
$user_image = mysqli_query($con, $user_image);
$row_image = mysqli_fetch_array($user_image);
$user_iamge = $row_image['user_image'];
echo" <li class='nav-item'>
         <img src='./user_images/$user_iamge' class='profile_image rounded-circle my-3'alt=''>
        </li>";
?>


       

        <li class="nav-item ">
          <a class="nav-link text-light"  href="profile.php">Pending Orders</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link text-light"  href="profile.php?edit_account">Edit Account</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link text-light"  href="profile.php?my_orders">My Orders</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link text-light"  href="profile.php?delete_account">Delete Account</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link text-light"  href="logout.php">Logout</a>
        </li>
</ul>
    </div>
    <div class="col-md-2"></div>
    
</div>
</div>



 
<?php
include("../include/footer.php");
?>
  </div>
  
  <!--bootstrap links-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>