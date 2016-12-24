<?php
$customer_file = file_get_contents("customer_data.json");
$customer_record = json_decode($customer_file, TRUE);
$customer = filter_input_array(INPUT_POST);
list(

	$customer_info['first_name'], $customer_info['last_name'], 
	$customer_info['address'], $customer_info['city'], 
	$customer_info['state'], $customer_info['zip_code']
	
	) = validate_array($customer["customer_record"]);
	
array_push($customer_record, $customer_info);
print_r($customer_record);
file_put_contents("customer_data.json",json_encode($customer_record));
// Postion does not matter
//Array (
// [0] => 
//Array ( [first_name] => default [last_name] => default [address] => default [city] => default [state] => default [zip_code] => 10001 ) 
//[1] =>
// Array ( [zip_code] => 11111 [state] => af [city] => ad [address] => aq [last_name] => as [first_name] => aa ) 
//)

?>



