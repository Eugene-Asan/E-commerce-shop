<?php
if(isset($_GET['delete_users'])){
    $delete_user = $_GET['delete_users'];
    $delete_query = "Delete from `user_table` where user_id = $delete_user";
    $result = mysqli_query($con, $delete_query);
    if($result){
        echo"<script>alert('User deleted successfully')</script>";
        echo"<script>window.open('./index.php?list_orders','_self')</script>";
     
    }
}
?>