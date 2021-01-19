<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>

<html>
    <head>
        <title> Home Page </title>
    </head>
<body>
    <a href = "logout.php"> LOGOUT </a>

    <h1>Welcome to Particep, <?php echo $_SESSION['username']; ?>! </h1>
</body>
</html>