<?php

session_start();
header('location:index.php');

$con = mysqli_connect('eu-cdbr-west-03.cleardb.net','bb3ba2919b47ef','fb8de583');

mysqli_select_db($con, 'heroku_6a1a16c55a7c7d8');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

$message = "";

// Problem here $num == 1 and echo
if($num == 1){
    $message = "Username already taken";
    // echo "Username already taken"; 
}else{
    $reg = "insert into usertable(name, password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    // echo "Registration succeeds";
    $message = "Registration succeeds";
}

// Code to send $message variable to HTML front end:
if($message == "Registration succeeds"){
    header('location:signup_succeed.php');
}elseif($message="Username already taken"){
    header('location:username_taken.php');
}

?>