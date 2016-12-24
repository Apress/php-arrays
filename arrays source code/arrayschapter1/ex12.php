<?php
$customer_record = array(‘Fred’, ‘Smith’, ‘123 Main Street’, ‘Atlanta’, ‘GA’, ‘30001’);
print_r($customer_record);

// Array ( [0] => Fred [1] => Smith [2] => 123 Main Street [3] => Atlanta [4] => GA [5] => 30001 )

$customer_record[0] = ‘Pete’;
print_r($customer_record);

//Array ( [0] => Pete [1] => Smith [2] => 123 Main Street [3] => Atlanta [4] => GA [5] => 30001 )

$customer_record[5] = 30001;
// Array ( [0] => Pete [1] => Smith [2] => 123 Main Street [3] => Atlanta [4] => GA [5] => 30001 )

$json = json_encode($customer_record);
print_r($json);
// ["Pete","Smith","123 Main Street","Atlanta","GA",30001]

?>
