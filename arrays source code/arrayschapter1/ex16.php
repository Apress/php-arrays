<?php
$customer_record = array('Pete' ,'Smith' ,'123 Main Street' ,'Atlanta','GA', 30001);
declare(strict_types=1);
function delete_array_value(int $subscript)
{
	unset($customer_record[$subscript]);	
}
delete_array_value(1);
?>
