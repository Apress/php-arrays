<?php
	class Lion {

	private $color = "no color";
	private $weight = 0;

	function get_color() {

	return $color;

	}
	function get_weight() {

	return $weight;

	}
	function set_color($value) {

	$this->color = $value;

	}
	function set_weight($value) {
	if ($value > 0) {

	$this->weight = $value;

	}
	}
	}
?>


















