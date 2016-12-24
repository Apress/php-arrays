<?php
try
{
	$mysqli = new mysqli("localhostorwebsite", "userid", "password", "database");
	
	$query = "SELECT * FROM customers";
	
	$result = $mysqli->query($query);
	
	$customer_record = $result->fetch_all(MYSQLI_NUM);
	
	$customer = filter_input_array(INPUT_POST);
	
	$customer_info = validate_array($customer["customer_record"]);
	
	array_push($customer_record, $customer_info);
	
	print_r($customer_record);
	
	$query = “INSERT INTO customers(first_name, last_name, address, city, state, zip_code) VALUES (“;
	$query .= $customer_info[0] . “,” . $customer_info[1] . “,” . $customer_info[2] . “,”;
	$query .= $customer_info[3] . “,” . $customer_info[4] . “,” . $customer_info[5] . “)”;
	
	$result = $mysqli->query($query);
	
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




