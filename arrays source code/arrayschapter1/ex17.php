<?php
$customer_record = array('Pete' ,'Smith' ,'123 Main Street' ,'Atlanta','GA', 30001);
declare(strict_types=1);
function delete_array_value(int $subscript)
{
	unset($customer_record[$subscript]);	
}
delete_array_value(1);
print_r($customer_record);
//Array (
//	[0] => Pete
//	[2] => 123 Main Street
//	[3] => Atlanta
//	[4] => GA
//	[5] => 30001
	
?>
