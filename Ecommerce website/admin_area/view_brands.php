
<h3 class="text-center text-success">All Brands</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-warning">
        <tr>
            <th class="bg-warning">Sl No</th>
            <th class="bg-warning">Brand Title</th>
            <th class="bg-warning">Edit</th>
            <th class="bg-warning">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
$select_cat = "Select * from `brands`";
$result = mysqli_query($con,$select_cat);
$number = 0;
while($row=mysqli_fetch_assoc($result)){
    
    $brand_id = $row['brand_id'];
    $brand_title = $row['brand_title'];
    $number++;
        ?>
        <tr>
            <td class="bg-secondary text-light text-center"><?php echo $number;?></td>
            <td class="bg-secondary text-light text-center"><?php echo $brand_title;?></td>
            <td class='bg-secondary text-center text-center'><a href='index.php?edit_brands=<?php echo $brand_id?>' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td class='bg-secondary text-center text-center'><a href='index.php?delete_brands=<?php echo $brand_id?>' class='text-light'><i class='fa-solid fa-trash'></i></a></td>

        </tr>
        <?php
}?>
    </tbody>
</table>