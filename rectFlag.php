<?php

require_once "Flag.php";
require_once "FlagSize.php";

class rectFlag extends Flag implements FlagSize{
		private $height;
		private $width;
		
		function __construct($bez, $col, $hei, $wid){
			parent::__construct($bez, $col);
			$this->height = $hei;
			$this->width = $wid;
		}
		
		function size(){
			return $this->height * $this->width;
		}
	}