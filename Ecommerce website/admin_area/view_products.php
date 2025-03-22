
    <h3 class = "text-center text-success">All Products</h3>
<table class = "table table-bordered mt-5">
    <thead class="bg-warning">
        <tr>
            <th class="bg-warning">Product ID</th>
            <th class="bg-warning">Product Title</th>
            <th class="bg-warning">Product Image</th>
            <th class="bg-warning">Product Price</th>
            <th class="bg-warning">Total Sold</th>
            <th  class="bg-warning">Status</th>
            <th class="bg-warning">Edit</th>
            <th class="bg-warning">Delete</th>
            
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php
$get_product = "Select * from `products`";
$result = mysqli_query($con,$get_product);
$number = 0;
while($row = mysqli_fetch_assoc($result)){
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_image1 = $row['product_image1'];
    $product_price = $row['product_price'];
    $status = $row['status'];
    $number++;
    ?>
  
    <tr>
            <td class='bg-secondary text-center'><?php echo$number; ?></td>
            <td class='bg-secondary text-center'><?php echo$product_title;?></td>
            <td class='bg-secondary text-center'><img src='./product_images/<?php echo$product_image1 ?>' class='product_img'/></td>
            <td class='bg-secondary text-center'><p>GHS</p><?php echo$product_price;?></td>
            <td class='bg-secondary text-center'><?php
            
            $get_count = "Select * from `orders_pending` where product_id = $product_id";
            $result_count = mysqli_query($con,$get_count);
            $rows_count = mysqli_num_rows($result_count);
            echo $rows_count;
            ?></td>
            <td class='bg-secondary text-center'> <?php echo$status;?></td>
            <td class='bg-secondary text-center'><a href='index.php?edit_products=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td class='bg-secondary text-center'><a href='index.php?delete_product=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
            
        </tr>
   <?php

}
        ?>
        
    </tbody>
</table>