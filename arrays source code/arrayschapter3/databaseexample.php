<?php
try
{
    require_once("validation.php");
	
	$mysqli = new mysqli("localhostorwebsite", "userid", "password", "database");
	$query = "SELECT * FROM customers";
	
    $result = $mysqli->query($query);
	
	$customer_record = $result->fetch_all(MYSQLI_ASSOC);
	$customer = filter_input_array(INPUT_POST);
	
	$customer_info = validate_array( $customer["customer_record"]);
	
	array_push($customer_record, $customer_info);
	print_r($customer_record);
	
	
	$mysqli->close();
}
catch(Exception $e)
{
	print "An Exception occurred. Message: " . $e->getMessage();
}
catch(Error $e)
{
	print "An Error occurred. Message: " . $e->getMessage();
}


?>


