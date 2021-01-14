<?php

session_start();

$con = mysqli_connect('remotemysql.com:3306','jZfcTdzic9','P1ErebOs6Q');

mysqli_select_db($con, 'jZfcTdzic9');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION["username"] = $name;
    header('location:home.php');
}else{
    header('location:login.php');
}

?>