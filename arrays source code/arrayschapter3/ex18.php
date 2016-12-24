<?php

class Customer
{
private $first_name = “NFN”;
	private $last_name = “NLN”;
	private $address = “NA”;
	private $city = “NC”;
	private $state = “NS”;
	private $zip_code = “NZC”;
}
declare(strict_types=1);
function set_first_name(string $value)
{
	if((strlen($value) > 0) && (strlen($value) < 21))
	{
		$this->first_name = $value;
	}
	else
	{
		throw new Exception(“Invalid First Name”);
	}
}

?>
