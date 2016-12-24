<?php
$customer_record = array ( 
	'first_customer' => 
array('first_name' => 'Pete' , 'last_name' => 'Smith' , 'address' => '123 Main Street' , 
'city' => 'Atlanta', 'state' => 'GA', 'zip_code' => 30001),
	'second_customer' => 
array('first_name' => 'Sally' , 'last_name' => 'Parisi' , 'address' => '101 South Street' , 
'city' => 'Atlanta' , 'state' => 'GA' , 'zip_code' => 30001)
);
foreach( $customer_record as $row => $row_array) 
{
foreach( $row_array as $column => $column_value)
{
		print "Row: $row Column: $column Value: $column_value <br>";
	}
	print “<br>”;
}

//Row: first_customer Column: first_name Value: Pete 
//Row: first_customer Column: last_name Value: Smith 
//Row: first_customer Column: address Value: 123 Main Street 
//Row: first_customer Column: city Value: Atlanta 
//Row: first_customer Column: state Value: GA 
//Row: first_customer Column: zip_code Value: 30001 
//Row: second_customer Column: first_name Value: Sally 
//Row: second_customer Column: last_name Value: Parisi 
//Row: second_customer Column: address Value: 101 South Street 
//Row: second_customer Column: city Value: Atlanta 
//Row: second_customer Column: state Value: GA 
//Row: second_customer Column: zip_code Value: 30001

?>


