<?php
$customer_record = array ( 
	'first_customer' => 
array('first_name' => 'Pete' , 'last_name' => 'Smith' , 'address' => '123 Main Street' , 
'city' => 'Atlanta', 'state' => 'GA', 'zip_code' => 30001),
	'second_customer' => 
array('first_name' => 'Sally' , 'last_name' => 'Parisi' , 'address' => '101 South Street' , 
'city' => 'Atlanta' , 'state' => 'GA' , 'zip_code' => 30001)
);
print_r($customer_record);

//Array ( 
//[first_customer] => 
//Array ( [first_name] => Pete [last_name] => Smith [address] => 123 Main Street 
//[city] => Atlanta [state] => GA [zip_code] => 30001 ) 
//[second_customer] => 
//Array ( [first_name] => Sally [last_name] => Parisi [address] => 101 South Street 
//[city] => Atlanta [state] => GA [zip_code] => 30001 ) )

?>


