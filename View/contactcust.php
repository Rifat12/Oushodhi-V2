<?php
session_start();
if ($_SESSION['flag'] != true) {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products</title>
</head>

<body>
    <?php include 'internalheader.php'; ?>
    <fieldset>
        <legend>Contact Customer</legend>
        <form action='./contactcust.php' method='POST'>
            <table align="">
                <tr>
                    <td>
                        Customer ID:
                    </td>
                    <td>
                        <input type="number" name='id'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Subject:
                    </td>
                    <td>
                        <input type="text" name='sub'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Date:
                    </td>
                    <td>
                        <input type="date" name='date'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Message Body:
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea id="msg" name="message" rows="4" cols="50">  </textarea>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type='submit' value='Send'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>

    <br>
    <?php include 'internalfooter.php'; ?>
    <?php

    if (isset($_POST['sub']) && isset($_POST['date']) && isset($_POST['message'])) {
        $sub = $_POST['sub'];
        $msg = $_POST['message'];

        if (strlen(str_replace(' ', '', $sub)) < 10) {
            echo "<mark>  Subject needs to  consist of atleast 10 characters<mark/>";
            return;
        }

        if (strlen(str_replace(' ', '', $msg)) < 50) {
            echo "<mark>  Message Body needs to  consist of atleast 50 characters<mark/>";
            return;
        }
        echo "<mark>  Successfully Sent<mark/>";
    }
    ?>
</body>

</html>