<?php

include "../config/connection.php";
$sql = "select count(id) as countuser from user";
$result1 = mysqli_query($conn , $sql);
$user =mysqli_fetch_assoc($result1) ;
//echo $user['countuser'];
///....................
$sql1 = "select count(id) as countcar from car";
$result2 = mysqli_query($conn , $sql1);
$car =mysqli_fetch_assoc($result2) ;
//echo $car['countcar'];
//....................
$sql2 = "select count(id) as countadmin from admin";
$result3 = mysqli_query($conn , $sql2);
$admin =mysqli_fetch_assoc($result3) ;
//echo $admin['countadmin'];
//................
$sql4 = "select count(id) as countcompany from company";
$result4 = mysqli_query($conn , $sql4);
$company =mysqli_fetch_assoc($result4) ;
//echo $company['countcompany'];

if(isset($_POST['signin'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from user where username='$username' and password='$password'";
    $res=mysqli_query($conn,$sql);
    if($res && $res->num_rows>0){
        $_SESSION['User_Login']=$username;
        header("location:indexLogin.php");
        echo "Correct!";
    }else{
        $_SESSION['login_faild'] ="username or password is incorrect";
        echo "Error!";

    }

}


if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "insert into user set username='$username' , phone_number = '$phone_number' ,email = '$email',  password = '$password'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $_SESSION['user'] = "user is  added";
        header("location:indexLogin.php");

    } else {

        $_SESSION['user'] = "user is not added";
//        header("location:manage-admin.php");

    }
}

?>


<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Best Study an Education Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<!-- meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //meta-tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

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

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Pricing -->
    <link rel="stylesheet" href="css/pricing.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- header -->
	<div class="header-top">
		<div class="container">
			<div class="bottom_header_left">
				<p>
					<span class="fa fa-map-marker" aria-hidden="true"></span>Al Noor Car Rental
				</p>
			</div>
			<div class="bottom_header_right">
				<div class="bottom-social-icons">
					<a class="facebook" href="https://www.facebook.com/noor.esam.965">
						<span class="fa fa-facebook"></span>
					</a>
					<a class="twitter" href="https://twitter.com/noor_shalayel">
						<span class="fa fa-twitter"></span>
					</a>
					<a class="pinterest" href="https://pin.it/2SkfpC3">
						<span class="fa fa-pinterest-p"></span>
					</a>
					<a class="linkedin" href="https://www.linkedin.com/in/noor-shalayel-829a131a4/">
						<span class="fa fa-linkedin"></span>
					</a>
				</div>
				<div class="header-top-righ">
<!--					<a href="#" data-toggle="modal" data-target="#myModal2">-->
<!--						<span class="fa fa-sign-out" aria-hidden="true"></span>Login</a>-->
                    <li><a class="active" href="#" data-toggle="modal" data-target="#myModal2" >Sign In</a></li>

                </div>
                <div class="header-top-righ">
<!--                    <a href="#" data-toggle="modal" data-target="#myModal3">-->
<!--						<span class="fa fa-sign-out" aria-hidden="true"></span>Sign Up</a>-->
                                        <li><a href="#" data-toggle="modal" data-target="#myModal3" >Sign Up</a></li>

                </div>
<!--                    <li><a class="active" href="#" data-toggle="modal" data-target="#myModal2" >Sign In</a></li>-->
<!--                    <li><a href="#" data-toggle="modal" data-target="#myModal3" >Sign Up</a></li>-->
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<!--Sign In -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
						<h3 class="agileinfo_sign">Sign In</h3>
						<div class="login-form">
							<form action="#" method="post">
                                <input id="username" type="text" name="username" class="validate" autocomplete="off" required >
                                <input id="password" type="password" class="validate" name="password" autocomplete="off" required>
								<div >
									<input type="submit"  name="signin" value="Sign In">
								</div>
							</form>
						</div>
						<div class="login-social-grids">
							<ul>
								<li><a src=""><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--    Sign up -->
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Sign Up</h3>
                        <div class="login-form">
                            <form action="#" method="post">
                                <input id="username" type="text" name="username" placeholder="Username" class="validate" autocomplete="off" required >
                                <input id="number" type="text" name="phone_number"  placeholder="Phone Number" class="validate" autocomplete="off" required >
                                <input id="email" type="email" name="email" class="validate" placeholder="Email" autocomplete="off" required >
                                <input id="password" type="password" name="password" placeholder="Password" class="validate" autocomplete="off" required >
                                <input type="submit" name="signup" value="Sign Up">
                            </form>
                        </div>
                        <p><a href="#"> By clicking register, I agree to your terms</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_SESSION['login_faild'])){
        echo $_SESSION['login_faild'];
        unset($_SESSION['login_faild']);
    }
    ?>
	<div class="header">
		<div class="content white">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">
							<h1>
								<span <img src="image/logo.jpg"> </span>AL NOOR
								<label>Car Rental</label>
							</h1>
						</a>
					</div>
					<!--/.navbar-header-->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <nav class="link-effect-2" id="link-effect-2">
                                <ul class="nav navbar-nav">
                                    <li >
                                        <a href="index.php" class="effect-3" >Home</a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="effect-3">About Us</a>
                                    </li>
                                    <li>
                                        <a href="company.php" class="effect-3">Company</a>
                                    </li>
                                    <li>
                                        <a href="car.php" class="effect-3">Cars</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="CompanyAdd.php">Add Company</a>
                                            </li>
                                            <li>
                                                <a href="CarAdd.php">Add Car</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="contact.php" class="effect-3">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h6>Welcome To Best Rental</h6>
<!--						<h3>Leading-->
<!--							<span>University</span>-->
<!--						</h3>-->
<!--						<p>Create an all-encompassing website for your school with ease.</p>-->
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h6>Welcome To Best Rental</h6>
<!--						<h3>Most Popular-->
<!--							<span>Education</span>-->
<!--						</h3>-->
<!--						<p>Create an all-encompassing website for your school with ease.</p>-->
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h6>Welcome To Best Rental</h6>
<!--						<h3>We Can-->
<!--							<span>Teach</span> You</h3>-->
<!--						<p>Create an all-encompassing website for your school with ease.</p>-->
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h6>Welcome To Best Rental</h6>
<!--						<h3>Most Popular-->
<!--							<span>Education</span>-->
<!--						</h3>-->
<!--						<p>Create an all-encompassing website for your school with ease.</p>-->
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
	<!-- about -->
<!--	<div class="banner-bottom-w3l" id="about">-->
<!--		<div class="container">-->
<!---->
		<!-- Stats-->
<!--				<div class="col-md-6 stats-info-agile">-->
<!--					<div class="col-xs-6 stats-grid stat-border">-->
<!--						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='768' data-delay='.5' data-increment="1">768</div>-->
<!--						<p>Faculties</p>-->
<!--					</div>-->
<!--					<div class="col-xs-6 stats-grid">-->
<!--						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='678' data-delay='.5' data-increment="1">678</div>-->
<!--						<p>Approved Courses</p>-->
<!--					</div>-->
<!--					<div class="clearfix"></div>-->
<!--					<div class="child-stat">-->
<!--						<div class="col-xs-6 stats-grid stat-border border-st2">-->
<!--							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='800' data-delay='.5' data-increment="1">800</div>-->
<!--							<p>Certified Teachers</p>-->
<!--						</div>-->
<!--						<div class="col-xs-6 stats-grid">-->
<!--							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='485' data-delay='.5' data-increment="1">485</div>-->
<!--							<p>Happy Students</p>-->
<!--						</div>-->
<!--						<div class="clearfix"></div>-->
<!--					</div>-->
<!--				</div>-->
			<!-- //Stats -->
<!--				<div class="clearfix"> </div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->




    <div id="fh5co-counter" class="fh5co-counters" style="background-image: url(image/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-bulb"></i></span>
                           <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $car['countcar']; ?>' data-delay='4' data-increment="1">678</div>
                            <span class="fh5co-counter-label">Cars</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-bulb"></i></span>
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $user['countuser'];  ?>' data-delay='4' data-increment="1">678</div>
                            <span class="fh5co-counter-label">Users</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-bulb"></i></span>
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $company['countcompany'];  ?>' data-delay='4' data-increment="1">678</div>
                            <span class="fh5co-counter-label">Company</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-bulb"></i></span>
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $admin['countadmin'];  ?>'  data-delay='4' data-increment="1">678</div>
                            <span class="fh5co-counter-label">admins</span>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Available Cars</h3>
        <br>
        <section class="menu-content">
            <?php
            $sql1 = "select * from car Limit 4";
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
                    <a class="active" href="#" data-toggle="modal" data-target="#myModal2">
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

<!--    <div class="bgimg-2">-->
<!--        <div class="caption">-->
<!--            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!---->
<!--    <div class="bgimg-2">-->
<!--        <div class="caption">-->
<!--            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>-->
<!--        </div>-->
<!--    </div>-->

	<!-- //services -->
	<!-- news -->

	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Best
						<span>Study</span>
					</h4>
				</div>
				<div class="modal-body">
					<div class="model-img-info">
						<img src="image/e1.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque
							ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis
							porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper. Cras tempor massa
							luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //news -->
	<!-- middle section -->

	<!-- //middle section -->
	<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>O</span>ur
					<span>C</span>lient's
					<span>S</span>ay
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<ul id="flexiselDemo1">
				<li>
					<div class="three_testimonials_grid_main">
						<div class="col-xs-3 three_testimonials_grid_pos">
							<div class="grid-test-allah-agile">
								<img src="image/te1.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
						<div class="col-xs-9 three_testimonials_grid">
							<div class="three_testimonials_grid1">
								<h5>Michael Paul</h5>
								<p>Client 1</p>
							</div>
							<p>
								Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa, eu aliquet massa. Suspendisse lacinia rutrum tincidunt.
								Integer id erat porta, convallis.
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</li>
				<li>
					<div class="three_testimonials_grid_main">
						<div class="col-xs-3 three_testimonials_grid_pos">
							<div class="grid-test-allah-agile">
								<img src="image/te2.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
						<div class="col-xs-9 three_testimonials_grid">
							<div class="three_testimonials_grid1">
								<h5>Faul John</h5>
								<p>Client 2</p>
							</div>
							<p>
								Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa, eu aliquet massa. Suspendisse lacinia rutrum tincidunt.
								Integer id erat porta, convallis.
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</li>
				<li>
					<div class="three_testimonials_grid_main">
						<div class="col-xs-3 three_testimonials_grid_pos">
							<div class="grid-test-allah-agile">
								<img src="image/te3.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
						<div class="col-xs-9 three_testimonials_grid">
							<div class="three_testimonials_grid1">
								<h5>Richa Roy</h5>
								<p>Client 3</p>
							</div>
							<p>
								Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa, eu aliquet massa. Suspendisse lacinia rutrum tincidunt.
								Integer id erat porta, convallis.
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</li>

			</ul>
		</div>
	</div>
	<!-- //testimonials -->
	<!-- footer -->
    <?php

     include "footer.php"
    ?>

</body>

</html>


