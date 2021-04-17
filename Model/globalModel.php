<?php

function insertProduct($productDetails)
{
    $conn = getConnection();
    $sql = "insert into products values('', '{$productDetails['name']}', '{$productDetails['buyingPrice']}', '{$productDetails['sellingPrice']}', '{$productDetails['displayable']}')";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}



function getAllProduct()
{
    $conn = getConnection();
    $sql = "select * from products";
    $result = mysqli_query($conn, $sql);
    $products = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($products, $row);
    }

    return $products;
}

function getProductById($id)
{

    $conn = getConnection();
    $sql = "select * from products where id='{$id}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    return $row;
}

function updateRow($id, $table)
{

    $conn = getConnection();
    $sql = "update products set name = '' where id='{$id}'";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteRow($table, $id)
{
    $conn = getConnection();
    $sql = "delete from $table where id='{$id}'";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
