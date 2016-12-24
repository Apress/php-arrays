<?php
$customer_record = array('Pete' ,'Smith' ,'123 Main Street' ,'Atlanta','GA', 30001);
declare(strict_types=1);
function update_array_value( int $position, $value )
{
	$customer_record[$position] = $value;	
}
update_array_value(0, "Peter");

	
?>
