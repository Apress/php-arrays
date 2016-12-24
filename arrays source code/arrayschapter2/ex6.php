<?php
$customer_record = array ( 
	array('Pete' , 'Smith' , '123 Main Street' , 'Atlanta', 'GA', 30001),
	array('Sally' , 'Parisi' , '101 South Street' , 'Atlanta' , 'GA' , 30001)
);
$customer = filter_input_array(INPUT_POST);
$customer_info = validate_array($customer["customer_record"]);
array_push($customer_record, $customer_info);
print_r($customer_record);
?>



