<?php 
	Class Registry{
		private $vars = array();
	
		public function __set($index, $value){
			$this->var[$index] = $value;	
		}

		public function __get($index){
			return $this->var[$index];
		}
	}
 ?>