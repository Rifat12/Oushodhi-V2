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
                Product Currently in stock
            </summary>

            <table border="1">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Product Type</th>
                        <th>Manfacturer</th>
                        <th>Stock Remaining</th>
                        <th>MRP</th>
                        <th>Prescription Requirement</th>
                        <th> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                        <th>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Napa</td>
                        <td>Medicine</td>
                        <td>Beximco</td>
                        <td>500</td>
                        <td>2/-</td>
                        <td>Yes</td>
                        <td><a href="">Edit</a></td>
                        <td><a href="">Delete</a></td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Asphalt 30</td>
                        <td>syringe</td>
                        <td>Acme</td>
                        <td>20</td>
                        <td>250/-</td>
                        <td>Yes</td>
                        <td><a href="">Edit</a></td>
                        <td><a href="">Delete</a></td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>RyClean</td>
                        <td>Hand sanitizer</td>
                        <td>K&amp;L</td>
                        <td>100</td>
                        <td>70/-</td>
                        <td>No</td>
                        <td><a href="">Edit</a></td>
                        <td><a href="">Delete</a></td>
                    </tr>
                </tbody>
            </table>

        </details>
    </div>

    <div class="wrapper">
        <details>
            <summary>
                Request A Product to Owner
            </summary>

            <table border="1">
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
                        <button type="submit">Confirm</button>
                    </td>
                </tr>
            </table>

        </details>
    </div>
    <div class="wrapper">
        <details>
            <summary>
                Insert A Product
            </summary>

            <table border="1">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Product Type</th>
                        <th>Manfacturer</th>
                        <th>Stock Remaining</th>
                        <th>MRP</th>
                        <th>Prescription Requirement</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>

                    </tr>
                </tbody>
            </table>
            <table>
                <tr>
                    <td>
                        <button type="submit">Confirm</button>
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