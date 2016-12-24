<?php
$customer_record = array ( 
	array(‘first_name’ =>'Pete' ,’last_name’ =>'Smith' ,’address’ =>'123 Main Street' ,’city’ => 'Atlanta', ‘state’ =>'GA', ‘zip_code’ =>30001),
	array(‘first_name’ =>'Sally' ,’last_name’ =>'Parisi' ,’address’ =>'101 South Street' ,’city’ => 'Atlanta' , ‘state’ =>'GA' , ‘zip_code’ => 30001)
);

declare(strict_types=1);
function delete_array_value(int $first_subscript, string $second_subscript)
{
	unset($customer_record[$first_subscript][$second_subscript);	
}

delete_array_value(1,’last_name’);


?>


