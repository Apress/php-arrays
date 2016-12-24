<?php
$customer_record = array ( 
	array(‘Pete’ , ‘Smith’ , ‘123 Main Street’ , ‘Atlanta’, ‘GA’, 30001),
	array(‘Sally’ , ’Parisi’ , ‘101 South Street’ , ‘Atlanta’ , ‘GA’ , 30001)
);

foreach ($customer_record as $row)
{
	foreach($row as $column_value)
	{
		Print $column_value . “ “;
	}
}

?>




