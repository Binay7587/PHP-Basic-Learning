<?php
	
	abstract class Test{
		final public function testFunc(){
			echo "I am test function of test class.";
		}

	}

	class TestNew extends Test{
		/*		public function testFunc(){
			Test::testFunc();
			echo "I am test function of TestNew Class.";
		}*/
		public static $name = "Sandesh";

		static function testNewStatic(){
			TestNew::$name = 'Test New';
			echo TestNew::$name;
		}

		static function newTest(){
			echo TestNew::$name;
		}

	}
	

/*	$obj = new TestNew();

	$obj->testFunc();*/