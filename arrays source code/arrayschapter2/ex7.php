<?php
$customer_record = array ( 
	array('Pete' , 'Smith' , '123 Main Street' , 'Atlanta', 'GA', 30001),
	array('Sally' , 'Parisi' , '101 South Street' , 'Atlanta' , 'GA' , 30001)
);
$customer = filter_input_array(INPUT_POST);
$customer_info = validate_array($customer["customer_record"]);
array_push($customer_record, $customer_info);
print_r($customer_record);

//Array ( 
//[0] => 
//Array ( [0] => Pete [1] => Smith [2] => 123 Main Street [3] => Atlanta [4] => GA [5] => 30001 ) 
//[1] => 
//Array ( [0] => Sally [1] => Parisi [2] => 101 South Street [3] => Atlanta [4] => GA [5] => 30001 ) 
//[2] => 
//Array ( [0] => Fred [1] => Smith [2] => 123 Main Street [3] => Atlanta [4] => GA [5] => 30001 ) )

?>

