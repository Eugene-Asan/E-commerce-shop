<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$username = $_SESSION['username'];
$get_user = "Select * from `user_table` where username ='$username'";
$result =mysqli_query($con, $get_user);
$row_fetch = mysqli_fetch_array($result);
$user_id = $row_fetch['user_id'];
// echo $user_id;
?>


    <h3 class="text-success  text-center">All my orders </h3>
    <table class="table table-bordered mt-5">
        <thead class="bg-warning">
        <tr>
            <th class="bg-warning">Sl no</th>
            <th class="bg-warning">Amount Due</th>
            <th class="bg-warning">Total Products</th>
            <th class="bg-warning">Invoice Number</th>
            <th class="bg-warning">Date</th>
            <th class="bg-warning">Complete/Incomplete</th>
            <th class="bg-warning">Status</th>
        </tr>
        </thead>
        <tbody class="bg-warning text-light">

<?php
$get_order_details = "Select * from `user_orders` where user_id = $user_id";
$result_orders = mysqli_query($con, $get_order_details);
$number = 1;
while($row_orders = mysqli_fetch_assoc($result_orders)){
    $order_id = $row_orders['order_id'];
    $amount_due = $row_orders['amount_due'];
    $total_products = $row_orders['total_products'];
    $invoice_number = $row_orders['invoice_number'];
    $order_status = $row_orders['order_status'];
if($order_status=='pending'){
    $order_status = 'Incomplete';
}
else{
    $order_status = 'Complete';
}

    $order_date = $row_orders['order_date'];
    
    echo" <tr>
                <td class='bg-secondary text-light'>$number</td>
                <td class='bg-secondary text-light'>$amount_due</td>
                <td class='bg-secondary text-light'>$total_products</td>
                <td class='bg-secondary text-light'>$invoice_number</td>
                <td class='bg-secondary text-light'>$order_date</td>
                <td class='bg-secondary text-light'>$order_status</td>
                <td class='bg-secondary text-light'><a href='confirm_payment.php?order_id=$order_id' class='text-light'>Confirm</a></td>
            </tr>
            
    ";
    $number++;
}

?>

            
        </tbody>
    </table>
</body>
</html>
