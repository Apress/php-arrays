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
?>

