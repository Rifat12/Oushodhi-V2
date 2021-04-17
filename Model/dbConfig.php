

	<?php
	$host = 'localhost';
	$dbUser = 'rifat';
	$dbPass = 'Test1234';
	$dbName = 'rifatdb';
	function getConnection()
	{
		global $host, $dbUser, $dbPass, $dbName;
		$conn = mysqli_connect($host, $dbUser, $dbPass, $dbName);
		return $conn;
	}
	?>