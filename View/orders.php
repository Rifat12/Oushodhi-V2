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

    <div class="wrapper">
        <details>
            <summary>
                Pending Orders
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
                        <th> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                        <th>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2343244</td>
                        <td>2344432</td>
                        <td>5000</td>
                        <td>05:00</td>
                        <td>Express</td>
                        <td>Yes</td>
                        <td><a href="">Accept</a></td>
                        <td><a href="">Reject</a></td>
                    </tr>
                    <tr>
                        <td>234355</td>
                        <td>234455</td>
                        <td>4000</td>
                        <td>21:00</td>
                        <td>Express</td>
                        <td>Yes</td>
                        <td><a href="">Accept</a></td>
                        <td><a href="">Reject</a></td>
                    </tr>
                    <tr>
                        <td>34443</td>
                        <td>43344</td>
                        <td>1444</td>
                        <td>15:00</td>
                        <td>Regular</td>
                        <td>No</td>
                        <td><a href="">Accept</a></td>
                        <td><a href="">Reject</a></td>
                    </tr>
                </tbody>
            </table>

        </details>
    </div>

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