<?php
// accepts information from example1.html
// This is NOT a complete program. The validate methods shown need to be created to clean any // input
$customer_record[“first_name”] = validate_first_name($_POST['first_name']);
$customer_record[“last_name”] = validate_last_name($_POST['last_name']);
$customer_record[“address”] = validate_address($_POST['address']);
$customer_record[“city”] = validate_city($_POST['city']);
$customer_record[“state”] = validate_state($_POST['state']);
$customer_record[“zip_code”] = validate_zip_code($_POST['zip_code']);
print "Your name is $customer_record[‘first_name’] $customer_record[‘last_name’]. You live at $customer_record[‘address’], $customer_record[‘city’], $customer_record[‘state’], $customer_record[‘zip_code’]";
?>

