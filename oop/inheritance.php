<?php

	class Person{
		protected $name=null;
		private $email = null;

		protected function setEmail($_email){
			$this->email = $_email;
		}

		public function getEmail(){
			return $this->email;
		}
	}

	class Student extends Person{
		public $class = null;

		public function __construct($_name, $_email, $_class){
			$this->name = $_name;
			$this->setEmail($_email);
			$this->class = $_class;
		}

		public function getStudent(){
			echo "Your name is: ".$this->name;
			echo "<br>";
			echo "Your email is: ".$this->getEmail();
			echo "<br>";
			echo "Your class is: ".$this->class;
		}
	}

	$student_obj = new Student("Student One",'stdone@gmail.com','BBA');
	$student_obj->getStudent();