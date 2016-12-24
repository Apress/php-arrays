<?php
$customer_record = array('Pete' ,'Smith' ,'123 Main Street' ,'Atlanta','GA', 30001);
function insert_array_value( $value )
{
	array_push($customer_record, $value);	
}
insert_array_value(‘770-777-7777’);

	
?>
