<?php
session_start();
if (isset($_POST['name']) || isset($_POST['email']) || isset($_POST['username']) || isset($_POST['password']) || isset($_POST['confirmpassword']) || isset($_POST['gender']) || isset($_POST['date']) || isset($_POST['month']) || isset($_POST['year']) || isset($_POST['gender'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];


    if (!ctype_alpha(str_replace(' ', '', $name))) {
        echo 'Name can only be alphabetical';
        return;
    }


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter e valid E-mail!";
        return;
    }

    if (!ctype_alnum($username)) {
        echo 'Username can be only alphanumeric';
        return;
    }


    if ($password != $confirmpassword) {
        echo 'Passwords do not match!';
        return;
    }
    if (strlen($password) < 8) {
        echo 'Password must be atleast 8 characters!';
        return;
    }


    $array1 = [];
    $array1 += ['username' => $username];
    $array1 += ['name' => $name];
    $array1 += ['password' => $password];
    $array1 += ['email' => $email];
    $array1 += ['gender' => $gender];
    $array1 += ['date' => $date];
    $array1 += ['month' => $month];
    $array1 += ['year' => $year];



    $json = json_encode($array1, JSON_PRETTY_PRINT);
    file_put_contents("../Model/users.json", $json);

    header('location: ../View/login.php');
}
