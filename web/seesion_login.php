<?php
// mysqli_connect() function opens a assets connection to the MySQL server.
require '../config/connection.php';


$user_check=$_SESSION['User_Login'];

// SQL Query To Fetch Complete Information Of User
$query = "select id from user where username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
?>