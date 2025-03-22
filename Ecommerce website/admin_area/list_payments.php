
<h3 class="text-center text-success">All payments</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-warning">
    <?php
// if(isset($_GET['list_orders']))
$get_payments = "Select * from `user_payments`";
$result = mysqli_query($con,$get_payments);
$row_count = mysqli_num_rows($result);
echo"
 <tr>
            <th class='bg-warning'>Sl No</th>
            
            <th class='bg-warning'>Invoice Number</th>
            <th class='bg-warning'>Amount</th>
            <th class='bg-warning'>Payment mode</th>
            <th class='bg-warning'>Order date</th>
            <th class='bg-warning'>Delete</th>
        </tr>
    </thead>
";
if($row_count==0){
    echo"<h2 class='bg-danger text-center mt-5'>No payments recieve yet<h2/>";
}
else{
    $number = 0;
    while($row_data = mysqli_fetch_assoc($result)){
        $order_id = $row_data['order_id'];
        $payment_id = $row_data['payment_id'];
        $amount = $row_data['amount'];
        $invoice_number = $row_data['invoice_number'];
        
        $payment_mode = $row_data['payment_mode'];
        $date = $row_data['date'];
        $number++;
        echo"<tr>
            <td class='bg-secondary text-center text-light'>$number</td>
           
            <td class='bg-secondary text-center text-light'>$invoice_number</td>
            <td class='bg-secondary text-center text-light'><p>GHS<p>$amount</td>
            <td class='bg-secondary text-center text-light'>$payment_mode</td>
            <td class='bg-secondary text-center text-light'>$date</td>
            <td class='bg-secondary text-center text-center'><a href='index.php?delete_payments = $payment_id' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
        </tr>";
    }
}
?>

    </thead>
    <tbody>
   
        
    </tbody>
</table>
