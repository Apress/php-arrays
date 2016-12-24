<?php

$customer_record = array ( 
	array('Pete' ,'Smith' ,'123 Main Street' ,'Atlanta','GA', 30001),
	array('Sally' ,'Parisi' ,'101 South Street' ,'Atlanta' , 'GA' , 30001)
);
declare(strict_types=1);
function update_array_value(int $subscript, $value)
{
	$customer_record[$subscript] = $value;	
}
$temp_array = array('Peter' ,'Smith' ,'1234 Main Street' ,'Atlanta', 'GA', 30001);
update_array_value(0, $temp_array);

?>




