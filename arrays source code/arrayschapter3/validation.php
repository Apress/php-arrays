<?php

declare(strict_types=1);
function validate_first_name(string $value) : string
{
If ((strlen($value) <= 0) || (strlen($value) > 15))
	{
		throw new Exception(“Invalid First Name”);
	}
	return $value;
}

function validate_last_name(string $value) : string
{
If ((strlen($value) <= 0) || (strlen($value) > 20))
	{
		throw new Exception(“Invalid Last Name”);
	}
	return $value;
}	
	
	function validate_address(string $value) : string
{
If ((strlen($value) <= 0) || (strlen($value) > 30))
	{
		throw new Exception(“Invalid Address”);
	}
	return $value;
}	
	
function validate_city(string $value) : string
{
If ((strlen($value) <= 0) || (strlen($value) > 20))
	{
		throw new Exception(“Invalid City”);
	}
	return $value;
}	
	
function validate_state(string $value) : string
{
If ((strlen($value) <= 0) || (strlen($value) > 2))
	{
		throw new Exception(“Invalid State”);
	}
	return $value;
}	

function validate_zip_code(string $value) : string
{
If ((strlen($value) <= 11111) || (strlen($value) > 99999))
	{
		throw new Exception(“Invalid Zip Code”);
	}
	return $value;
}				

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

