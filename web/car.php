<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include "../config/connection.php";
include "menu.php";

?>
?>
<!DOCTYPE html>
<html lang="zxx">

<div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
    <h3 style="text-align:center;">Available Cars</h3>
    <br>
    <section class="menu-content">
        <?php
        $sql1 = "select * from car";
        $result1 = mysqli_query($conn,$sql1);

        if ($result1 && $result1->num_rows > 0) {
            while($row1 =$result1->fetch_assoc()){
                $car_id = $row1["id"];
                $car_name = $row1["name"];
                $car_model = $row1["model"];
                $company_name = $row1["company_name"];
                $car_color = $row1["color"];
                $image = $row1["image"];
                $price_per_day = $row1["price_per_day"];
                $price_per_km = $row1["price_per_km"];

                ?>
                <a href="User_Login.php?id=<?php echo($car_id) ?>">
                    <div class="sub-menu">


                        <img class="card-img-top" src="<?php echo $image; ?>" alt="Card image cap">
                        <h5><b> <?php echo $car_name; ?> </b></h5>
                        <h6> Price_Per_Day: <?php echo $price_per_day; ?></h6>
                        <h6> Price_Per_KM : <?php echo $price_per_km; ?></h6>
                        <h6> Model : <?php echo $car_model ; ?></h6>


                    </div>
                </a>
            <?php }}
        else {
            ?>
            <h1> No cars available :( </h1>
            <?php
        }
        ?>
    </section>

</div>

	<!-- footer -->

<?php

include "footer.php";
?>

</html>