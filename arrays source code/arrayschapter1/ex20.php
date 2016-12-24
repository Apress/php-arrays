<?php
$customer_record =  array('Pete' ,'Smith' ,'123 Main Street' ,'Atlanta','GA', 30001);
declare(strict_types=1);
function update_array_value( $value, int $subscript = -1)
{
	If( $subscript != -1)
		{   $customer_record[$subscript] = $value; }
	else
		{  array_push($customer_record, $value); }	
}
update_array_value(“770-777-7777”, 6);
update_array_value(“770-777-7777”);
update_array_value("Peter", 0);

?>
