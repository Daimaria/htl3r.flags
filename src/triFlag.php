<?php

namespace "HTL3R\Flags";

class triFlag extends Flag implements FlagSize{
		private $a;
		private $ha;
		
		function __construct($bez, $col, $a, $heiA){
			parent::__construct($bez, $col);
			$this->a = $a;
			$this->ha = $heiA;
		}
		
		function size(){
			return ($this->a * $this->ha)/2;
		}
	}