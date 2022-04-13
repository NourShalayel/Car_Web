<?php
include "../config/connection.php";

include 'partial/menu.php';

$page_title = "add user";

?>
<!--    <div class="main-content">-->
<!--        <div class="wrapper">-->
<!--            <h1>Add User</h1>-->
<!---->
<!--            <br><br>-->

<!---->
<!--            <form action="" method="POST">-->
<!---->
<!--                <table class="tbl-30">-->
<!--                    <tr>-->
<!--                        <td>User Name:</td>-->
<!--                        <td >-->
<!--                            <input type="text" name="username" placeholder="Your Username">-->
<!--                        </td>-->
<!--                    </tr>-->
<!---->
<!--                    <tr>-->
<!--                        <td>Phone Number:</td>-->
<!--                        <td>-->
<!--                            <input type="number" name="phone_number" placeholder="Your Phone NUmber">-->
<!--                        </td>-->
<!--                    </tr>-->
<!---->
<!--                    <tr>-->
<!--                        <td>Email:</td>-->
<!--                        <td>-->
<!--                            <input type="email" name="email" placeholder="Your Email">-->
<!--                        </td>-->
<!--                    </tr>-->
<!---->
<!--                    <tr>-->
<!--                        <td>Password:</td>-->
<!--                        <td>-->
<!--                            <input type="password" name="password" placeholder="Your Password">-->
<!--                        </td>-->
<!--                    </tr>-->
<!---->
<!--                    <tr>-->
<!--                        <td colspan="2">-->
<!--                            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">-->
<!--                        </td>-->
<!--                    </tr>-->
<!---->
<!--                </table>-->
<!---->
<!--            </form>-->
<!---->
            <main class="mn-inner mt-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <h4 class="font-weight-bold text-center">Add User</h4>

                    <div class="col-md-12">
                        <div class="row" >
                            <div class="col-md-3"></div>
                            <div class="col-md-6 d-flex justify-content-center align-items-center">
                                <div class="card white darken-1">
                                    <div class="card-content">
                                        <div class="row">
                                            <form class="col s12" name="signin" method="post">
                                                <div class="input-field col s12">

                                                    <p>Enter UserName</p>
                                                    <input id="username" type="text" name="username" class="validate" autocomplete="off" required >

                                                    <p>Enter Phone Number</p>


                                                    <input id="number" type="number" name="phone_number" class="validate" autocomplete="off" required >
                                                </div> <div class="input-field col s12">

                                                    <p>Enter Email</p>
                                                    <input id="email" type="email" name="email" class="validate" autocomplete="off" required >

                                                </div> <div class="input-field col s12">
                                                    <p>Enter Password</p>
                                                    <input id="password" type="password" name="password" class="validate" autocomplete="off" required >

                                                </div>

                                                <div class="col s12 center m-t-sm">

                                                    <input type="submit" name="submit" value="submit" class="waves-effect waves-light btn teal">
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

        </div>
    </div>

<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "insert into user set username='$username' , phone_number = '$phone_number' ,email = '$email',  password = '$password'";
    $res = mysqli_query($conn , $sql);
    if($res){
        $_SESSION['car'] = "car is  added";
//        header("location:manage-admin.php");

    } else {

        $_SESSION['admin'] = "admin is not added";
//        header("location:manage-admin.php");

    }
}

?>






