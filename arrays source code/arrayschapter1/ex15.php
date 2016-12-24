<?php
function validate_array( $input_array);
{
	$value = validate_first_name($input_array[0]);
	$value = validate_last_name($input_array[1]);
	$value = validate_address($input_array[2]);
$value = validate_city($input_array[3]);
$value = validate_state($input_array[4]);
$value = validate_zip_code($input_array[5]);
return $input_array;
}
?>

