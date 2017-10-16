<?php

namespace HTL3R\Flags;

abstract class Flag {
	private $name;
	private $color;

	function __construct($bez, $col){
		$this->name = $bez;
		$this->color = $col;
	}

	function __toString(){
		echo "$this->name in Farbe $this->color";
	}
}