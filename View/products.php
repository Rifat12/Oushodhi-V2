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


    <div class="insert">
        <form action="../Controller/productCRUD.php" method="post">
            <h3>Insert A Product</h3>
            <table>
                <thead>

                    <tr>
                        <th>Product Name</th>
                        <th>Product Type</th>
                        <th>Manufacturer</th>
                        <th>Stock Remaining</th>
                        <th>MRP</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="p_name" id=""></td>
                        <td><input type="text" name="p_type" id=""></td>
                        <td><input type="text" name="Manufacturer" id=""></td>
                        <td><input type="number" name="Stock" id=""></td>
                        <td><input type="number" name="MRP" id=""></td>

                    </tr>
                </tbody>
            </table>
            <table>
                <tr>
                    <td>
                        <button type="submit" name="save">Save</button>
                    </td>
                </tr>
            </table>

        </form>
    </div>

    <?php require("../Controller/productCRUD.php"); ?>


    <div class="wrapper">
        <details>
            <summary>
                Request A Product to Owner
            </summary>

            <table>
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Amount</th>
                        <th>Reason of request</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>

                    </tr>
                </tbody>
            </table>
            <table>
                <tr>
                    <td>
                        <button type="submit">Save</button>
                    </td>
                </tr>
            </table>

        </details>
    </div>


    <div class="wrapper">
        <details>
            <summary>
                See Quality of products
            </summary>

            <table border="solid">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>BSTI Approval</th>
                        <th>WHO Approval</th>
                        <th>FDI Index</th>
                        <th>Effectiveness</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Excellent</td>
                        <td>80%</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Safe</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Yes</td>
                        <td>Partial</td>
                        <td>Safe</td>
                        <td>99%</td>
                    </tr>
                </tbody>
            </table>

        </details>
    </div>


    <br>
    <?php include 'internalfooter.php'; ?>
</body>

</html>