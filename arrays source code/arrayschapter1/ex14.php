<?php
$customer = filter_input_array(INPUT_POST);
$customer_record = validate_array($customer["customer_record"]);
print "Your name is $customer_record[0] $customer_record[1]. You live at $customer_record[2], $customer_record[3], $customer_record[4], $customer_record[5]";
?>


