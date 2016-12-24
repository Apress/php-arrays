<?php

$customer_record = array ( 
	array('Pete' ,'Smith' ,'123 Main Street' ,'Atlanta','GA', 30001),
	array('Sally' ,'Parisi' ,'101 South Street' ,'Atlanta' , 'GA' , 30001)
);
declare(strict_types=1);
function update_array_value( $value, int $first_subscript = -1, int $second_subscript = -1)
{
	if( $first_subscript != -1 && $second_subscript != -1)
		{   
			$customer_record[$first_subscript][$second_subscript] = $value; 
			
		}
	else if ($first_subscript != -1)
		{ 
		
			$customer_record[$first_subscript] = $value; 
			
		}
	else
		{  
		
			array_push($customer_record, $value); 
			
		}	
}
$temp_array = array('Jackie' ,'Smith' ,'123 Main Street' ,'Atlanta','GA', 30001);

update_array_value(“770-777-7777”, 1, 6);

update_array_value($temp_array, 1);

update_array_value($temp_array);

?>




