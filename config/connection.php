<?php
session_start();
//const SITEURL = "http://localhost:63342/php%20template/";
const servername = "localhost";
const username = "root";
const password = "";
const dbname = "car";

$conn = mysqli_connect(servername , username , password , dbname);

if (mysqli_connect_error()){
    echo "connect error";
}else{
//    echo "connected";
}
?>