<?php

$customer_record = array ( 
	array('Pete' ,'Smith' ,'123 Main Street' ,'Atlanta','GA', 30001),
	array('Sally' ,'Parisi' ,'101 South Street' ,'Atlanta' , 'GA' , 30001)
);
declare(strict_types=1);
function delete_array_value(int $first_subscript, int $second_subscript)
{
	unset($customer_record[$first_subscript][$second_subscript);	
}
delete_array_value(1,1);

?>




