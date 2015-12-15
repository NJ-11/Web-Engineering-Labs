<?php
	require_once __DIR__ . '/db_connect.php';	// adding class for connection
	
	$db = new DB_CONNECT();




$result = mysqli_query($db->connect(),"select * from $_GET[select]");
	
$rCount = $result->num_rows;

echo json_encode($result);	
	
	
	
?>