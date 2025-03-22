<?php
include('../include/connect.php');

session_start();

if(isset($_GET['order_id'])){
    $order_id = $_GET['order_id'];
    // echo $order_id;
    $select_data = "Select * from `user_orders` where order_id = $order_id";
    $result = mysqli_query($con, $select_data);
    $row_fetch = mysqli_fetch_assoc($result);
   
    $invoice_number = $row_fetch['invoice_number'];
    $amount_due = $row_fetch['amount_due'];
}
if(isset($_POST['confirm_payment'])){
    $user_email = $_POST['user_email'];
    $invoice_number = $_POST['invoice_number'];
    $amount = $_POST['amount'];
    $payment_mode = $_POST['payment_mode'];
    $insert_query ="insert into `user_payments` (user_email,order_id, invoice_number, amount, payment_mode)
    values('$user_email',$order_id,$invoice_number,$amount,'$payment_mode')";
    $result = mysqli_query($con, $insert_query);
    if($result){
        echo"<script>window.open('paystack.php?order_id=$order_id','_self')</script>";
        
    }
    else{
        echo"Payment failed";
    }
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
                <input type="text" class="form-control w-50 m-auto" name ="invoice_number" value="<?php echo$invoice_number ?>">
            </div>

            <div class="form-outline my-4 text-center w-50 m-auto">
                <label for="" class="text-light">Amount</label>
                <input type="text" id="amount" class="form-control w-50 m-auto" name ="amount" value="<?php echo $amount_due ?>">
            </div>

            <div class="form-outline my-4 text-center w-50 m-auto">
               <select name="payment_mode"class="form-select w-50 m-auto">
                <option value="option1">Select Payment Mode</option>
                <option value="Paystack">PayStack</option>
                <option value="Offline">Pay Offline</option>
                <option value="Cash">Cash on delivery</option>
               </select>
            </div>
            
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="submit" class="bg-secondary py-2 px-3 border-0"
                value = "Continue to Pay" name="confirm_payment">
                
            </div>
           
        </form>
    </div>
   

</body>
</html>