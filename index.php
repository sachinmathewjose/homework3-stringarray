<?php
$obj = new main();
$obj->arrayFunctions();
$obj->stringFunctions();

class main {
	public $sampleArray = array('1,2,3,4,5,6,7,8,9,0');
	public function __construct() {
		echo "<h1>Welcome to the Demostration of Array and String functions</h1>";
	}

	public function arrayFunctions() {
		echo '<h3>Array functions: </h3><hr>';
		$this->printrArray();
		#$this->sumArray();
	}

	public function printrArray() {
		echo "<h4>1. Function :<b>print_r()</b></h4>";
		echo "<p>THis function prints the array elements: <p>";
		print_r($this->sampleArray);
		echo "<br><br>";
	}

	public function sumArray() {
		echo "<h4>2. Function :<b> array_sum()</b></h4>";
		echo "<p> <p>";
		echo "<br><br>";
	}

	public function pArray() {
		echo "<h4>2. Function :<b> </b></h4>";
		echo "<p> <p>";
		echo "<br><br>";
	}



#*********************************************************************************************************

	public function stringFunctions() {
		echo '<h3>String functions: </h3><hr>';
	}
}

?>
