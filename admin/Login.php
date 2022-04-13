<?php
include "../config/connection.php";
if(isset($_POST['signin'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from admin where username='$username' and password='$password'";
    $res=mysqli_query($conn,$sql);
    if($res && $res->num_rows>0){
        $_SESSION['login']=$username;
        header("location:show_user.php");
        echo "Correct!";
    }else{
        $_SESSION['login_faild'] ="username or password is incorrect";
        echo "Error!";

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Employee leave management system |  Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
    <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light py-3">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-center align-items-center" id="navbarNavAltMarkup">
        <div class="navbar-nav d-flex justify-content-center align-items-center">
            <!-- <a class="nav-item text-white font-weight-bold nav-link active ml-3" href="#">Home <span class="sr-only">(current)</span></a> -->
            <a class="nav-item text-white font-weight-bold nav-link ml-3" href="#"></a>
            <a class="nav-item text-white font-weight-bold nav-link ml-3" href="admin.php">Home</a>
<!--            <a class="nav-item text-white font-weight-bold nav-link ml-3" href="User_Login.php">User Login</a>-->
            <a class="nav-item text-white font-weight-bold nav-link ml-3" href="">Admin Login</a>
            <a class="nav-item text-white font-weight-bold nav-link ml-3" href="add_admin.php">Register</a>

        </div>
    </div>
</nav>
<main class="mn-inner mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <h4 class="font-weight-bold text-center">Welcome Admin</h4>

        <div class="col-md-12">
            <div class="row" >
                <div class="col-md-3"></div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="card white darken-1">
                        <div class="card-content">
                            <span class="card-title" style="font-size:20px;">Admin Login</span>
                            <div class="row">
                                <form class="col s12" name="signin" method="post">
                                    <div class="input-field col s12">
                                        <p>Enter UserName</p>
                                        <input id="username" type="text" name="username" class="validate" autocomplete="off" required >
                                        <label for="email"></label>
                                    </div>
                                    <div class="input-field col s12">
                                        <p>Enter Password</p>
                                        <input id="password" type="password" class="validate" name="password" autocomplete="off" required>
                                        <label for="password"></label>
                                    </div>
                                    <div class="col s12 center m-t-sm">

                                        <input type="submit" name="signin" value="Login" class="waves-effect waves-light btn teal">
                                    </div>
                                </form>
                            </div>
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
</main>


<!-- Javascripts -->
<script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="../assets/plugins/materialize/js/materialize.min.js"></script>
<script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
<script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="../assets/js/alpha.min.js"></script>
</section>
</body>
</html>