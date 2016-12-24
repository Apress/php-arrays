<?php
$customer_record = array ( 
	array(‘first_name’ =>'Pete' ,’last_name’ =>'Smith' ,’address’ =>'123 Main Street' ,’city’ => 'Atlanta', ‘state’ =>'GA', ‘zip_code’ =>30001),
	array(‘first_name’ =>'Sally' ,’last_name’ =>'Parisi' ,’address’ =>'101 South Street' ,’city’ => 'Atlanta' , ‘state’ =>'GA' , ‘zip_code’ => 30001)
);

declare(strict_types=1);
function update_array_value( $value, string $first_subscript = “none”, string $second_subscript = “none”)
{
	If( $first_subscript != “none” && $second_subscript != “none”)
		{   $customer_record[$first_subscript][$second_subscript] = $value; }
	else if ($first_subscript != “none”)
		{ $customer_record[$first_subscript] = $value; }
	else
		{  array_push($customer_record, $value); }	
}

$temp_array = array('Jackie' ,'Smith' ,'123 Main Street' ,'Atlanta','GA', 30001);
update_array_value(“770-777-7777”, “second_customer”, “phone_number”);
update_array_value($temp_array, “second_customer”);
update_array_value($temp_array);


?>


