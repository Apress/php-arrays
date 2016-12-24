<?php

try {

include “addtwo.php”;
print dividetwo( 12, 14);

} 
catch(zeroException $e) { 
      
print “Don’t try to divide by zero!”; 

}
catch(Exception $e) {  
      
print $e->getMessage(); 

}
catch(Error $e) {

print $e->getMessage();

}
?>


















