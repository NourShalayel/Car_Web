<?php

//if(isset($_POST['submit'])){
//    header("location:conform_order.php");
//}else{
//    header("location:conform_order.php");
//}
include('session_User.php');
include "menu.php";


?>

<?php
$user_id= $_SESSION['User_Login'];
if(isset($_POST['submit'])){
    $id =  $_GET["id"];
    $sql = "update user set car_id='$id' where username='$user_id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $_SESSION['user'] = "<div class='success'>Car added</div>";
        header("location:conform_order.php");
    }
} else {
    $_SESSION['user'] = "<div class='error'>Car not added</div>";

}

?>
<html>

<head>

</head>
<body>


<link rel="stylesheet" type="text/css" media="screen" href="../new/css/clientpage.css" />
<div class="container" style="margin-top: 65px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
        <div class="form-area">
            <form role="form"  action="conform_order.php" method="POST">
                <br style="clear: both">
                <br>

                <?php
                $id = $_GET["id"];
                $sql1 = "select * from car where id = '$id'";
                $result1 = mysqli_query($conn, $sql1);

                if(mysqli_num_rows($result1)){
                    while($row1 = mysqli_fetch_assoc($result1)){
                        $car_name = $row1["name"];
                        $model = $row1["model"];
                        $company_name = $row1["company_name"];
                        $color = $row1["color"];
                        $image = $row1["image"];
                    }
                }

                ?>

                <!-- <div class="form-group"> -->
                <h5> Selected Car:&nbsp;  <b><?php echo($car_name);?></b></h5>
                <!-- </div> -->

                <!-- <div class="form-group"> -->
                <h5> Model:&nbsp;<b> <?php echo($model);?></b></h5>
                <h5> Company Name :<b> <?php echo($company_name);?></b></h5>
                <h5> Color :<b> <?php echo($color);?></b></h5>
                <!-- </div>      -->
                <!-- <div class="form-group"> -->
                <?php $today = date("Y-m-d") ?>
                <label><h5>Start Date:</h5></label>
                <input type="date" name="rent_start_date" min="<?php echo($today);?>" required="">
                &nbsp;
                <label><h5>End Date:</h5></label>
                <input type="date" name="rent_end_date" min="<?php echo($today);?>" required="">
                <!-- </div>      -->



                <h5> Charge type:  &nbsp;
                    <input onclick="reveal()" type="radio" name="radio1" value="km"><b> per KM</b> &nbsp;
                    <input onclick="reveal()" type="radio" name="radio1" value="days"><b> per day</b>

                    <br><br>

                    <input type="submit"name="submit" value="Rent Now" class="btn btn-warning pull-right">
            </form>

        </div>
        <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
            <h6><strong>Note:</strong> You will be charged with extra <span class="text-danger">Rs. 500</span> for each day after the due date ends.</h6>
        </div>
    </div>
</div>

    <?php

    include "footer.php";


    ?>
    </body>
</html>


