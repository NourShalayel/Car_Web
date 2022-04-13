<?php
$page_title = "Delete Company";

include "../config/connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from company where id = $id";
    $result = mysqli_query($conn , $sql);
    if ($result){
        $_SESSION['company'] = "<div class='success'>Company deleted</div>";
        header("location:show_company.php");
    }else{
        $_SESSION['company'] = "<div class='error'>Company not deleted</div>";
        header("location:show_company.php");
    }
}else{
    header("location:show_company.php");
}
?>