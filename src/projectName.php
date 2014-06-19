<?php

echo PHP_EOL. __FILE__;


class FOO
{

    private static $FOO = 2; // Unused
	private $i = 5; // Unused
	private $amount;


	public function addOne()
	{
		return $this->amount++;
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

echo 'errorrrrrrrr

