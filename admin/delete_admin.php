<?php
$page_title = "Delete Admin";

include "../config/connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from admin where id = $id";
    $result = mysqli_query($conn , $sql);
    if ($result){
        $_SESSION['admin'] = "<div class='success'>admin deleted</div>";
        header("location:show_admin.php");
    }else{
        $_SESSION['admin'] = "<div class='error'>admin not deleted</div>";
        header("location:show_admin.php");
    }
}else{
    header("location:show_admin.php");
}
?>