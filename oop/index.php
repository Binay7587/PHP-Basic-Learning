<?php
	/* 	
		public
		protected
		private
	*/

	class ClassName{
		// body

		private $name = null;

		const ADDRESS = "Kathmandu";

		// Constructors and Desctructors
		public function __construct($_name){
			$this->name = $_name;

			self::ADDRESS;
		}

		function setname($_name){
			$this->name = $_name;
		}

		function getName(){
			return $this->name;
		}
		// var, methods, consts
		/*public function test(){
			echo "I am in className class's test function.<br>";
		}*/

	}

	ClassName::ADDRESS;
	
	$obj = new ClassName("Sandesh Bhattarai");
	// name

	$new_obj = new ClassName("New User");
	
