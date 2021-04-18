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
    <br>
    <?php require("../Controller/orderProcess.php"); ?>
    <br>

    <div class="wrapper">
        <details>
            <summary>
                Accepted Orders
            </summary>

            <table border="1">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer ID</th>
                        <th>Amount Worth</th>
                        <th>Order Time</th>
                        <th>Delivery Type</th>
                        <th>Prescription Provided</th>
                        <th>State</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>25444</td>
                        <td>43424</td>
                        <td>2100</td>
                        <td>15:00</td>
                        <td>Express</td>
                        <td>Yes</td>
                        <td><a href="">Accepted</a></td>
                    </tr>

                </tbody>
            </table>

        </details>
    </div>

    <button onclick="window.print()">Print Order Report</button>
    <?php include 'internalfooter.php'; ?>
</body>

</html>