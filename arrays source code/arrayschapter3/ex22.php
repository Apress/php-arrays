<?php

class Customer
{
class Customer
{
private $first_name = “NFN”;
	private $last_name = “NLN”;
	private $address = “NA”;
	private $city = “NC”;
	private $state = “NS”;
	private $zip_code = “NZC”;
declare(strict_types=1);
function __construct(string $value1, string $value2, string $value3, string $value4, 
string $value5, int $value6)
{	
	$this->set_first_name($value1);
	$this->set_last_name($value2);
	$this->set_address($value3);
	$this->set_city($value4);
	$this->set_state($value5);
	$this->set_zip_code($value6);
}
declare(strict_types=1);
function set_first_name(string $value)
{
		if((strlen($value) > 0) && (strlen($value) < 16))
		{	$this->first_name = $value;	}
		else
		{	throw new Exception(“Invalid First Name”);	}
}

function set_last_name(string $value)
{ if((strlen($value) > 0) && (strlen($value) < 21))
		{	$this->last_name = $value;	}
		else
		{	throw new Exception(“Invalid Last Name”);	}}

function set_address(string $value)
{ if((strlen($value) > 0) && (strlen($value) < 31))
		{	$this->address = $value;	}
		else
		{	throw new Exception(“Invalid Address”);	}}

function set_city(string $value)
{ if((strlen($value) > 0) && (strlen($value) < 21))
		{	$this->city = $value;	}
		else
		{	throw new Exception(“Invalid City”);	}}

function set_state(string $value)
{ if((strlen($value) > 0) && (strlen($value) < 3))
		{	$this->state = $value;	}
		else
		{	throw new Exception(“Invalid State”);	}}

function set_zip_code( $value)
{ if(($value >= 11111) && ($value <= 99999))
		{	$this->zip_code = $value;	}
		else
		{	throw new Exception(“Invalid Zip Code”);	}}

function get_first_name() : string
{ return $this->first_name; }

function get_last_name() : string
{ return $this->last_name; }

function get_address() : string
{ return $this->address; }

function get_city() : string
{ return $this->city; }

function get_state() : string
{ return $this->state; }

function get_zip_code()
{ return $this->zip_code; }
}
}

$customer = filter_input_array(INPUT_POST);
$customer_record[] = new Customer($customer["customer_record"]);
var_dump($customer_record);

//  array(1) 
//  { [0]=> object(Customer)#1 (6)
//  { ["first_name":"Customer":private]=> string(4) "fred" 
//  ["last_name":"Customer":private]=> string(5) "smith" 
//  ["address":"Customer":private]=> string(15) "123 Main Street" 
//  ["city":"Customer":private]=> string(8) "Marietta"
//  ["state":"Customer":private]=> string(2) "GA" 
//  ["zip_code":"Customer":private]=> string(5) "11111" } }


?>
