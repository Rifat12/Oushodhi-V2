<?php

function insertProduct($arr)
{
	$conn = getConnection();
	$sql = "insert into products (p_id, p_name, p_type, manufacturer, stock, mrp) values('', '{$arr[1]}', '{$arr[2]}', '{$arr[3]}', '{$arr[4]}', '{$arr[5]}')";

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

function updateProduct($id, $arr)
{

	$conn = getConnection();
	$sql = "update products set name = '{$arr['name']}', buyingPrice='{$arr['buyingPrice']}', sellingPrice='{$arr['sellingPrice']}', displayable='{$arr['displayable']}' where id='{$id}'";

	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}

function deleteProduct($id)
{
	$conn = getConnection();
	$sql = "delete from products where id='{$id}'";

	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}
