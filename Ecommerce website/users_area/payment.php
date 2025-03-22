
<?php

include('../include/connect.php');
include('../function/common_function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  
  <!--cdn links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!--php code to access user id -->
<?php
$user_ip = getIPAddress();
$get_user = "Select * from `user_table` where user_ip = '$user_ip'";
$result = mysqli_query($con,$get_user);
$run_query=mysqli_fetch_array($result);
$user_id = $run_query['user_id'];

?>

    

    <div class="container-fluid">
    <h2 class="text-center my-3">Order</h2>
    <div class="row d-flex align-items-center justify-content-center mt-5">
        <di class="col-lg-12 col-xl-6">

 

        <a class="bg-warning py-2 px-3 border-0 outline-0 text-center" href="order.php?user_id=<?php echo$user_id ?>">Click to order</a>

       

    </div> 
   
     

</form>
        </div>
    </div>
  </div>

 
  <script src="https://js.paystack.co/v1/inline.js"></script> 
      <script src="payment.js"></script>

</body>
</html>