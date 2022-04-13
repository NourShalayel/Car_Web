<?php
$page_title = "update admin";
include  "../config/connection.php";
include "partial/menu.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from admin where id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result && $result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        $username = $admin['username'];
        $email = $admin['email'];
        $password = $admin['password'];

    } else {
        header("location:show_admin.php");
    }
} else {
    header("location:show_admin.php");
}
?>
<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "update admin set username = '$username' , email = '$email' ,  password  = '$password' where id = '$id'";
    $result = mysqli_query($conn , $sql);
    if ($result){

        $_SESSION['admin']="<div class='success'>admin updated </div>";
        header("location:show_admin.php");
    }else{
        $_SESSION['admin']="<div class='error'>admin not updated</div>";
    }
}
?>
    <main class="mn-inner mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <h4 class="font-weight-bold text-center">Update Admin</h4>

            <div class="col-md-12">
                <div class="row" >
                    <div class="col-md-3"></div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <div class="card white darken-1">
                            <div class="card-content">
                                <div class="row">
                                    <form class="col s12" name="signin" method="post">
                                        <div class="input-field col s12">
<!--                                           <p>--><?php //echo $username ?><!--</p>-->
                                            <p>Enter UserName</p>
                                            <input id="username" type="text" name="username" class="validate"  value ="<?php echo $username ?>" autocomplete="off" required >

                                            <p>Enter Email</p>
                                            <input id="email" type="email" name="email" class="validate" value ="<?php echo $email ?> " autocomplete="off" required >

                                        </div> <div class="input-field col s12">
                                            <p>Enter Password</p>
                                            <input id="password" type="password" name="password" class="validate" value ="<?php echo $password ?> " autocomplete="off" required >

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

    </main>
