
<h3 class="text-center text-success">All orders</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-warning">
    <?php
// if(isset($_GET['list_orders']))
$get_orders = "Select * from `user_orders`";
$result = mysqli_query($con,$get_orders);
$row_count = mysqli_num_rows($result);
echo"
 <tr>
            <th class='bg-warning'>Sl No</th>
            <th class='bg-warning'>Due Amount</th>
            <th class='bg-warning'>Invoice Number</th>
            <th class='bg-warning'>Total Products</th>
            <th class='bg-warning'>Order Date</th>
            <th class='bg-warning'>Status</th>
            <th class='bg-warning'>Delete</th>
        </tr>
    </thead>
";
if($row_count==0){
    echo"<h2 class='bg-danger text-center mt-5'>No orders yet<h2/>";
}
else{
    $number = 0;
    while($row_data = mysqli_fetch_assoc($result)){
        $order_id = $row_data['order_id'];
        $user_id = $row_data['user_id'];
        $amount_due = $row_data['amount_due'];
        $invoice_number = $row_data['invoice_number'];
        $total_products = $row_data['total_products'];
        $order_date = $row_data['order_date'];
        $order_status = $row_data['order_status'];
        $number++;
        echo"<tr>
            <td class='bg-secondary text-center text-light'>$number</td>
            <td class='bg-secondary text-center text-light'>$amount_due</td>
            <td class='bg-secondary text-center text-light'>$invoice_number</td>
            <td class='bg-secondary text-center text-light'>$total_products</td>
            <td class='bg-secondary text-center text-light'>$order_date</td>
            <td class='bg-secondary text-center text-light'>$order_status</td>
            <td class='bg-secondary text-center text-center'><a href='index.php?delete_orders= $order_id' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
        </tr>";
    }
}
?>

    </thead>
    <tbody>
   
        
    </tbody>
</table>
