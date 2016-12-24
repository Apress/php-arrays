<?php
$customer_record = array ( 
	'first_customer' => 
array('first_name' => 'Pete' , 'last_name' => 'Smith' , 'address' => '123 Main Street' , 
'city' => 'Atlanta', 'state' => 'GA', 'zip_code' => 30001),
	'second_customer' => 
array('first_name' => 'Sally' , 'last_name' => 'Parisi' , 'address' => '101 South Street' , 
'city' => 'Atlanta' , 'state' => 'GA' , 'zip_code' => 30001)
);

declare(strict_types=1);
function update_array_value(string $subscript, $value)
{
	$customer_record[$subscript] = $value;	
}

$temp_array = array(‘first_name’ =>'Pete' ,’last_name’ =>'Smith' ,’address’ =>'123 Main Street' ,’city’ => 'Atlanta', ‘state’ =>'GA', ‘zip_code’ =>30001);

update_array_value(‘first_customer’, $temp_array);

?>


