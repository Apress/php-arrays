<?php
$customer_record = array ( 
	array(‘Pete’ , ‘Smith’ , ‘123 Main Street’ , ‘Atlanta’, ‘GA’, 30001),
	array(‘Sally’ , ’Parisi’ , ‘101 South Street’ , ‘Atlanta’ , ‘GA’ , 30001)
);

foreach( $customer_record as $row => $row_array) 
{
foreach( $row_array as $column => $column_value)
{
		print "Row: $row Column: $column Value: $column_value ";
	}
	print “<br>”;
}
//Row: 0 Column: 0 Value: Pete Row: 0 Column: 1 Value: Smith Row: 0 Column: 2 Value: 123 Main Street Row: 0 Column: 3 Value: Atlanta Row: 0 Column: 4 Value: GA Row: 0 Column: 5 Value: 30001 
//Row: 1 Column: 0 Value: Sally Row: 1 Column: 1 Value: Parisi Row: 1 Column: 2 Value: 101 South Street Row: 1 Column: 3 Value: Atlanta Row: 1 Column: 4 Value: GA Row: 1 Column: 5 Value: 30001
//Row: 1 Column: 0 Value: Fred Row: 1 Column: 1 Value: Smith Row: 1 Column: 2 Value: 123 Main Street Row: 1 Column: 3 Value: Atlanta Row: 1 Column: 4 Value: GA Row: 1 Column: 5 Value: 30001


?>




