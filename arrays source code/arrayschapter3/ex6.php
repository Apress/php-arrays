<?php
try
{
	$mysqli = new mysqli("localhostorwebsite", "userid", "password", "database");
	$query = "SELECT * FROM customers";
$result = $mysqli->query($query);
	$customer_record = $result->fetch_all(MYSQLI_ASSOC);
	$customer = filter_input_array(INPUT_POST);
	$customer_info = validate_array( $customer["customer_record"]);
	array_push($customer_record, $customer_info);
	print_r($customer_record);
$query = “INSERT INTO customers(first_name, last_name, address, city, state, zip_code) VALUES (“;
$query .= $customer_info[first_name’] . “,” . $customer_info[‘last_name’] . “,”; 
$query .= $customer_info[‘address’] . “,” . $customer_info[‘city’] . “,” . $customer_info[‘state’] ;
$query . = “,” . $customer_info[‘zip_code’] . “)”;
	$result = $mysqli->query($query);
	$mysqli->close();
}
catch(Exception $e)
{
// … no changes in the try blocks
// not complete code
?>


