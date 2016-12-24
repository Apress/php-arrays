<?php
$customer_record = array(‘Fred’, ‘Smith’, ‘123 Main Street’, ‘Atlanta’, ‘GA’, ‘30001’);
print_r($customer_record);

// Array ( [0] => Fred [1] => Smith [2] => 123 Main Street [3] => Atlanta [4] => GA [5] => 30001 )

$customer_record[0] = ‘Pete’;
print_r($customer_record);

//Array ( [0] => Pete [1] => Smith [2] => 123 Main Street [3] => Atlanta [4] => GA [5] => 30001 )

$customer_record[6] = ‘7707777777’;
print_r($customer_record);
// Array ( [0] => Pete [1] => Smith [2] => 123 Main Street [3] => Atlanta [4] => GA [5] => 30001 [6] => 7707777777 )

$customer_record[] = ‘880888888’;
print_r($customer_record);
// Array ( [0] => Pete [1] => Smith [2] => 123 Main Street [3] => Atlanta [4] => GA [5] => 30001 [6] => 7707777777 [7] 880888888)

?>
