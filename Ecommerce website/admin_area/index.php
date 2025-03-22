<?php
include('../include/connect.php');
include('../function/common_function.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- boostrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="../style.css">
<!-- Internal style -->
<style>
    .admin_image{
    width: 100px;
    object-fit: contain;
}
.footer{
    position:absolute;
    bottom:0;
}
body{
    overflow-x:hidden;
}
.product_img{
    width:100px;
    object-fit:contain;
}
</style>

</head>
<body>
    
<!-- Navbar -->
<div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <img src="../images/apple.jpg" alt="" class = "logo">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome Guest</a>
                    </li>
                </ul>

</nav>
        </div>
    </nav>
    <!-- second child -->
    <div class="bg-light">
        <h3 class="text-center p-2">Manage details</h3>
    </div>
     <!-- third child -->
     <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="px-5" >
                <a href="#"><img src="../images/apple.jpg" alt="" class = "admin_image"></a>
                <p class="text-light tect-center">Admin Name</p>
            </div>
            <div class="button text-center">
                <button class= "my-3"><a href="insert_product.php" class="nav-link text-light bg-warning my-1">Insert Product</a></button>
                <button><a href="index.php?charts" class="nav-link text-light bg-warning my-1">View Charts</a></button>
                <button><a href="index.php?view_products" class="nav-link text-light bg-warning my-1">View Product</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-light bg-warning my-1">Insert Categories</a></button>
                <button><a href="index.php?view_categories" class="nav-link text-light bg-warning my-1">View Categories</a></button>
                <button><a href="index.php?insert_brand" class="nav-link text-light bg-warning my-1">Insert Brands</a></button>
                <button><a href="index.php?view_brands" class="nav-link text-light bg-warning my-1">View Brands</a></button>
                <button><a href="index.php?list_orders" class="nav-link text-light bg-warning my-1">All Orders</a></button>
                <button><a href="index.php?list_payments" class="nav-link text-light bg-warning my-1">All Payments</a></button>
               

                <button><a href="index.php?list_users" class="nav-link text-light bg-warning my-1">List Users</a></button>
                <button><a href="" class="nav-link text-light bg-warning my-1">Logout</a></button>
            </div>
        </div>
     </div>
</div>
<!-- fourth child -->
<div class="container my-5">
    <?php
    if(isset($_GET['charts'])){
        include('charts.php');
    }

    if(isset($_GET['insert_category'])){
        include('insert_categories.php');
    }
    if(isset($_GET['insert_brand'])){
        include('insert_brands.php');
    }
    if(isset($_GET['view_products'])){
        include('view_products.php');
    }
    if(isset($_GET['edit_products'])){
        include('edit_products.php');
    }
    if(isset($_GET['delete_product'])){
        include('delete_product.php');
    }
    if(isset($_GET['view_categories'])){
        include('view_categories.php');
    }
    if(isset($_GET['view_brands'])){
        include('view_brands.php');
    }
    if(isset($_GET['edit_category'])){
        include('edit_category.php');
    }
    if(isset($_GET['edit_brands'])){
        include('edit_brands.php');
    }
    if(isset($_GET['delete_category'])){
        include('delete_category.php');
    }
    if(isset($_GET['delete_brands'])){
        include('delete_brands.php');
    }
    if(isset($_GET['list_orders'])){
        include('list_orders.php');
    }
    if(isset($_GET['list_payments'])){
        include('list_payments.php');
    }
    if(isset($_GET['list_users'])){
        include('list_users.php');
    }
    if(isset($_GET['delete_orders'])){
        include('delete_oreders.php');
    }
    if(isset($_GET['delete_payments'])){
        include('delete_payments.php');
    }
    
    if(isset($_GET['delete_users'])){
        include('delete_users.php');
    }
   
    
    ?>
</div>
<!-- last child -->
<?php
include("../include/footer.php");
?>
<!-- boostrap js link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>