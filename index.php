
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rentals</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="../new/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../new/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../new/css/user.css">
    <link rel="stylesheet" href="../new/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="index.php">
                Car Rentals </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">

                    <li>
                    </li>

                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>


            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="User_Login.php">Users</a>
                    </li>
                    <li>
                        <a href="Login.php">Admin</a>
                    </li>
                    <li>
                        <a href="faq/index.php"> FAQ </a>
                    </li>
                </ul>
            </div>

        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="bgimg-1">
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading" style="color: black">Car Rentals</h1>
                        <p class="intro-text">
                            Online Car Rental Service
                        </p>
                        <a href="#sec2" class="btn btn-circle page-scroll blink">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<?php

include  "../config/connection.php";

?>


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

<div class="bgimg-2">
    <div class="caption">
        <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
    </div>
</div>


<div class="bgimg-2">
    <div class="caption">
        <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
    </div>
</div>


<!-- Container (Contact Section) -->
<!-- -->
<footer class="site-footer">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <h5>© </h5>
            </div>

        </div>
    </div>
</footer>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCuoe93lQkgRaC7FB8fMOr_g1dmMRwKng&callback=myMap" type="text/javascript"></script>
<script src="../new/js/jquery.min.js"></script>
<script src="../new/bootstrap/js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="../new/js/jquery.easing.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="../new/js/theme.js"></script>
</body>

</html>