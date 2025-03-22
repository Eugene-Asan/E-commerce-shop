<?php
include('../include/connect.php');

session_start();

if(isset($_GET['order_id'])){
    $order_id = $_GET['order_id'];
    // echo $order_id;
    $select_data = "Select * from `user_orders` where order_id = $order_id";
    $result = mysqli_query($con, $select_data);
    $row_fetch = mysqli_fetch_assoc($result);
    $amount_due = $row_fetch['amount_due'];



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  
  <!--cdn links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <!--Script js link-->
</head>
<body class="bg-warning">

    <div class="container my-5">
    <h1 class="text-center text-light">Confirm Payment</h1>
        <form id="paymentForm" action="" method="post">
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="email" id="user_email" placeholder="Enter your valid email" class="form-control w-50 m-auto" name ="user_email">
            </div>

           

            <div class="form-outline my-4 text-center w-50 m-auto">
                <label for="" class="text-light">Amount</label>
                <input type="text" id="amount" class="form-control w-50 m-auto" name ="amount" value="<?php echo $amount_due ?>">
            </div>

           
            
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="submit" class="bg-secondary py-2 px-3 border-0"
                value = "Continue to Pay" name="confirm_payment"onclick="payWithPaystack()">
                
            </div>
           
        </form>
    </div>
    <script src="https://js.paystack.co/v1/inline.js"></script> 
      <script src="payment.js"></script>

</body>
</html>