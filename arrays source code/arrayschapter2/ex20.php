<?php

$customer_record = array ( 
	array('Pete' ,'Smith' ,'123 Main Street' ,'Atlanta','GA', 30001),
	array('Sally' ,'Parisi' ,'101 South Street' ,'Atlanta' , 'GA' , 30001)
);
declare(strict_types=1);
function update_array_value(int $first_subscript, int $second_subscript, $value)
{
	$customer_record[$first_subscript][$second_subscript] = $value;	
}
update_array_value(0, 0, “Peter”);


?>




