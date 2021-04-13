<?php
session_start();
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_POST['date']) && isset($_POST['gender'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];

    for ($i = 0; $i < strlen($name); $i++) {
        if (!((ord($name[$i]) >= 97 && ord($name[$i]) <= 122)) && !((ord($name[$i]) >= 65 && ord($name[$i]) <= 90)) && !(ord($name[$i]) == 32)) {
            echo 'Name can only be alphabetical';
            break;
            return;
        }
    }


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter e valid E-mail!";
        return;
    }

    for ($i = 0; $i < strlen($username); $i++) {
        if (!((ord($username[$i]) >= 97 && ord($username[$i]) <= 122)) && !((ord($username[$i]) >= 65 && ord($username[$i]) <= 90))  && !((ord($username[$i]) >= 48 && ord($username[$i]) <= 57))) {
            echo 'Username can be only alphanumeric';
            break;
            return;
        }
    }

    if ($password != $confirmpassword) {
        echo 'Passwords do not match!';
        return;
    }

    if (strlen($password) < 8) {
        echo 'Password must be atleast 8 characters!';
        return;
    }
    $flag = 0;
    for ($i = 0; $i < strlen($password); $i++) {
        if ($password[$i] === '@' || $password[$i] === '#' || $password[$i] === '$' || $password[$i] === '%') {
            $flag += 1;
            break;
        }
    }

    if ($flag < 1) {
        echo 'Password must have a special character!';
        return;
    }




    $array1 = [];
    $array1 += ['username' => $username];
    $array1 += ['name' => $name];
    $array1 += ['password' => $password];
    $array1 += ['email' => $email];
    $array1 += ['gender' => $gender];
    $array1 += ['date' => $date];



    $json = json_encode($array1, JSON_PRETTY_PRINT);
    file_put_contents("../Model/users.json", $json);

    header('location: ../View/login.php');
} else {
    echo "Please Fill Everything";
}
