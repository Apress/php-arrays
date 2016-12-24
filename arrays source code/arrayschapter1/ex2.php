<?php
// accepts information from example1.html
// This is NOT a complete program. The validate methods shown need to be created to clean any // input.
$first_name = validate_first_name($_POST['first_name']);
$last_name = validate_last_name($_POST['last_name']);
$address = validate_address($_POST['address']);
$city = validate_city($_POST['city']);
$state = validate_state($_POST['state']);
$zip_code = validate_zip_code($_POST['zip_code']);
print "Your name is $first_name $last_name. You live at $address, $city, $state, $zip_code";
?>

