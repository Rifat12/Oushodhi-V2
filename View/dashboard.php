<?php
session_start();
if ($_SESSION['flag'] != true) {
    header('location: login.php');
}

$a = file_get_contents("../Model/users.json");

$info = json_decode($a, true);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'internalheader.php'; ?>

    <h1 align="center">Welcome, <strong><?php echo $_SESSION['username'] ?></strong>!</h1>
    <br>
    <fieldset>
        <legend>
            <b> Staff Profile</b>
        </legend>
        <table align="">
            <tr>
                <td>
                    Full Name:
                </td>
                <td>
                    <?php echo $info['name'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <?php echo $info['email'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Username:
                </td>
                <td>
                    <?php echo $info['username'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    Gender:
                </td>
                <td>
                    <?php echo $info['gender'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Date of Birth:
                </td>
                <td>
                    <?php echo $info['date'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
        </table>
    </fieldset>

    <br>
    <?php include 'internalfooter.php'; ?>



</body>

</html>