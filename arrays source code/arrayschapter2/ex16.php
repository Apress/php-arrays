<?php

$square_array[$height][$length][$width] = 123;

foreach( $square_array as $height => $height_array) 
{
	foreach( $height_array as $length => $length_array)
	{
		foreach( $length_array as $width => $width_value)
		{
			print $width_value;
			$square_array[$height][$length][$width]= 345;
		}
}
}
// 123
?>




