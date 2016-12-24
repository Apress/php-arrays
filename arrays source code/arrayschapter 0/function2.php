<?php

function display_names( $first_name, $last_name = “none”) {

	print "Your first name is $first_name";

	if ($last_name != “none”) {

		print "your last name is $last_name";

	}
}

display_names("James");

display_names("Jackie", "Jones");
?>















