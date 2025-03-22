
<h3 class="text-center text-success">All Users</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-warning">
    <?php
// if(isset($_GET['list_orders']))
$get_payments = "Select * from `user_table`";
$result = mysqli_query($con,$get_payments);
$row_count = mysqli_num_rows($result);
echo"
 <tr>
            <th class='bg-warning'>Sl No</th>
            
            <th class='bg-warning'>Username</th>
            <th class='bg-warning'>User Email</th>
            <th class='bg-warning'>User Image</th>
            <th class='bg-warning'>User Address</th>
            <th class='bg-warning'>User Mobile</th>
            <th class='bg-warning'>Delete</th>
        </tr>
    </thead>
";
if($row_count==0){
    echo"<h2 class='bg-danger text-center mt-5'>No users yet<h2/>";
}
else{
    $number = 0;
    while($row_data = mysqli_fetch_assoc($result)){
        $user_id = $row_data['user_id'];
        $username = $row_data['username'];
        $user_email = $row_data['user_email'];
        $user_image = $row_data['user_image'];
        
        $user_address = $row_data['user_address'];
        $user_mobile = $row_data['user_mobile'];
        $number++;
        echo"<tr>
            <td class='bg-secondary text-center text-light'>$number</td>
           
            <td class='bg-secondary text-center text-light'>$username</td>
            <td class='bg-secondary text-center text-light'>$user_email</td>
            <td class='bg-secondary text-center text-light'><img src='../users_area/user_images/$user_image'alt='$username' class='product_img'/></td>
            <td class='bg-secondary text-center text-light'>$user_address</td>
            <td class='bg-secondary text-center text-light'>$user_mobile</td>
            <td class='bg-secondary text-center text-center'><a href='index.php?delete_users = $user_id' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
        </tr>";
    }
}
?>

    </thead>
    <tbody>
   
        
    </tbody>
</table>
