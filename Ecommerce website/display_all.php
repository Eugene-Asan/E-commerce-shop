<?php
include('include/connect.php');
include('function/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce website in php</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  
  <!--cdn links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <!--Script js link-->
  
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-plus"></i><sup><?php
        cart_item(); ?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: GHS<?php total_cart_price(); ?></a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
 
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

<!-- fouth child -->
<div class="row px-1">

<div class="col-md-10">
  <!-- products -->
<div class="row">

<!-- Getting products from the database -->

 <?php
//calling function
getproducts();
get_unique_categories();
get_unique_brands();
 ?>

<!-- row end -->
</div>
<!-- col end -->
</div>
<!-- side nav -->
<div class="col-md-2 bg-secondary p-0">
  <!-- brands to be displayed -->
  <ul class="navbar-nav me-auto text-center">
    <li class="nav item bg-warning">
      <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
    </li>


    <?php
    //getting brands from the database to the sidenav
    getbrands();
    
    ?>




    
  </ul>
  <!-- categories to be displayed -->
  <ul class="navbar-nav me-auto text-center">
    <li class="nav item bg-warning">
      <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
  </li>
  <?php
  //geting categories from the database to the sidenav
    getcategories();
    ?>
    
  </ul>
</div>
</div>



<!-- last child  -->
<!-- include footer-->
<?php
include("./include/footer.php");
?>


  </div>
  
  <!--bootstrap links-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>