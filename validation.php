<?php

session_start();

$con = mysqli_connect('eu-cdbr-west-03.cleardb.net','bb3ba2919b47ef','fb8de583');

mysqli_select_db($con, 'heroku_6a1a16c55a7c7d8');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION["username"] = $name;
    header('location:home.php');
}else{
    header('location:index.php');
}

?>