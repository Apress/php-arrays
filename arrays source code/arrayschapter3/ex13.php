<?php
$customer_record = array ( 
	array(‘first_name’ =>'Pete' ,’last_name’ =>'Smith' ,’address’ =>'123 Main Street' ,’city’ => 'Atlanta', ‘state’ =>'GA', ‘zip_code’ =>30001),
	array(‘first_name’ =>'Sally' ,’last_name’ =>'Parisi' ,’address’ =>'101 South Street' ,’city’ => 'Atlanta' , ‘state’ =>'GA' , ‘zip_code’ => 30001)
);

declare(strict_types=1);
function update_array_value(int $first_subscript, string $second_subscript, $value)
{
	$customer_record[$first_subscript][$second_subscript] = $value;	
}
update_array_value(0, ‘first_name’, “Peter”);


?>


