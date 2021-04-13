<?php

$a = file_get_contents("../Model/users.json");

$aa = json_decode($a, true);



session_start();
if (isset($_POST['logusername']) && isset($_POST['logpassword'])) {
    $username = $_POST['logusername'];
    $password = $_POST['logpassword'];

    if (in_array($password, $aa) && in_array($username, $aa)) {
        $_SESSION['flag'] = true;
        header('location: ../View/dashboard.php');
    } else {
        $_SESSION['flag'] = false;
        //header('location: login.php');
        echo "<h1>Invalid Credentials :( Please Try again.</h1>";
        echo "<br>";
        echo '<h1> <a href="../View/login.php">Try Again</a> </h1>';
    }
}
