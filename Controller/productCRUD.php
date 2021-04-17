<?php

require_once('../model/dbConfig.php');
require_once('../model/productModel.php');


if (isset($_POST['save'])) {
    $data = array($_POST['p_id'], $_POST['p_name'], $_POST['p_type'], $_POST['Manufacturer'], $_POST['Stock'], $_POST['MRP']);
    if (($_POST['p_name'] == "" || $_POST['p_type'] == "" || $_POST['Manufacturer'] == "")) {
        echo "Please Fill data";
        return;
    }
    if (insertProduct($data)) {
        header('location: ../view/products.php');
    } else {
        echo "Insert Failed <br>";
        print_r($data);
        return;
    }
}

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

    <table border='1'>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Type</th>
                <th>Manufacturer</th>
                <th>Remaining Stock</th>
                <th>MRP</th>
                <th colspan="2">Action</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>

        <?php $products = getAllProduct(); ?>
        <?php for ($i = 0; $i < count($products); $i++) { ?>
            <tr>
                <td> <?php echo $products[$i]['p_id']; ?></td>
                <td> <?php echo $products[$i]['p_name']; ?></td>
                <td> <?php echo $products[$i]['p_type']; ?></td>
                <td> <?php echo $products[$i]['manufacturer']; ?></td>
                <td> <?php echo $products[$i]['stock']; ?></td>
                <td> <?php echo $products[$i]['mrp']; ?></td>

            </tr>
        <?php } ?>

    </table>

</body>

</html>