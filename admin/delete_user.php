<?php
$page_title = "Delete User";

include "../config/connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from user where id = $id";
    $result = mysqli_query($conn , $sql);
    if ($result){
        $_SESSION['user'] = "<div class='success'>User deleted</div>";
        header("location:show_user.php");
    }else{
        $_SESSION['user'] = "<div class='error'>User not deleted</div>";
        header("location:show_user.php");
    }
}else{
    header("location:show_user.php");
}
?>