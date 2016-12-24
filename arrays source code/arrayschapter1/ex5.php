<?php
// accepts information from example1.html
// This is NOT a complete program. The validate methods shown need to be created to clean any // input
$customer_record[] = validate_first_name($_POST['first_name']);
$customer_record[] = validate_last_name($_POST['last_name']);
$customer_record[] = validate_address($_POST['address']);
$customer_record[] = validate_city($_POST['city']);
$customer_record[] = validate_state($_POST['state']);
$customer_record[] = validate_zip_code($_POST['zip_code']);
print "Your name is $customer_record[0] $customer_record[1]. You live at $customer_record[2], $customer_record[3], $customer_record[4], $customer_record[5]";
?>

