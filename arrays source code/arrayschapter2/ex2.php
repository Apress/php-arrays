<?php
$I = -1;
$customer_record[++$I][] = 'Pete';				$customer_record[$I][] = 'Smith';
$customer_record[$I][] = '123 Main Street';		$customer_record[$I][] = 'Atlanta';
$customer_record[$I][] = 'GA';					$customer_record[$I][] = 30001;
$customer_record[++$I][] = 'Sally';				$customer_record[$I][] = 'Parisi';
$customer_record[$I][] = '101 South Street';	$customer_record[$I][] = 'Atlanta';
$customer_record[$I][] = 'GA';					$customer_record[$I][] = 30001;
print_r($customer_record);
?>
// not recommended!!
