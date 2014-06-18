<?php

class Foo  
{
	private static $FOO = 2; // Unused 
	private $i = 5; // Unused 
	private $j = 6; 
	
	public function addOne() 
	{ 
		return $this->j++; 
	}

	public function doSomething() 
	{ 
		$i = 5; // Unused 
	}

	private function bar($howdy) 
	{ 
	 	// $howdy is not used 
	}
}
