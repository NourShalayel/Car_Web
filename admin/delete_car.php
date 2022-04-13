<?php
$page_title = "Delete Car";

include "../config/connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from car where id = $id";
    $result = mysqli_query($conn , $sql);
    if ($result){
        $_SESSION['car'] = "<div class='success'>Car deleted</div>";
        header("location:show_car.php");
    }else{
        $_SESSION['car'] = "<div class='error'>Car not deleted</div>";
        header("location:show_car.php");
    }
}else{
    header("location:show_car.php");
}
?>