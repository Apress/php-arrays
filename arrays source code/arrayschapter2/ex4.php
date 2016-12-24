<?php
$customer_record = array ( 
	array(‘Pete’ , ‘Smith’ , ‘123 Main Street’ , ‘Atlanta’, ‘GA’, 30001),
	array(‘Sally’ , ’Parisi’ , ‘101 South Street’ , ‘Atlanta’ , ‘GA’ , 30001)
);

$customer_record[0][0] = 'Peter';
$customer_record[0][6] = '770-770-7777';
$customer_record[2] = array(‘Jake’ , ‘Boukari’ , ‘111 Peachtree Street’ , ‘Atlanta’ , ‘GA’ , 30011);

print_r($customer_record);
//Array ( 
//[0] => Array ( [0] => Pete [1] => Peter [2] => 123 Main Street [3] => Atlanta [4] => GA [5] => 30001 [6] => 770-770-7777 ) 
//[1] => Array ( [0] => Sally [1] => Parisi [2] => 101 South Street [3] => Atlanta [4] => GA [5] => 30001 ) 
//[2] => Array ( [0] => Jake [1] => Boukari [2] => 111 Peachtree Street [3] => Atlanta [4] => GA [5] => 30011 )
//)

?>

