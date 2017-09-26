<?php
$obj = new main();
$obj->arrayFunctions();
$obj->stringFunctions();

class main {
	public $sampleArray = array(1,2,3,4,5,6,7,8,9,0);
	public $sampleString = "This is a SAMPLE String";
	public function __construct() {
		echo "<h1>Welcome to the Demostration of Array and String functions</h1>";
	}

	public function arrayFunctions() {
		echo '<h3>Array functions: </h3><hr>';
		$this->printrArray();
		$this->sumArray();
		$this->sortArray();
		$this->rancArray();
		$this->pushArray();
		$this->searchArray();
		$this->shuffleArray();
		$this->sliceArray();
		$this->shiftArray();
		$this->chunkArray();
		echo "<hr><hr>";
	}

	public function printrArray() {
		echo "<h4>1. Function :<b>print_r()</b></h4>";
		echo "<p>THis function prints the array elements: <p>";
		print_r($this->sampleArray);
		echo "<br><br>";
	}

	public function sumArray() {
		echo "<h4>2. Function :<b> array_sum()</b></h4>";
		echo "<p>This functions finds the sum of elements in the array <p>";
		echo 'sum is : ';
		echo array_sum($this->sampleArray);
		echo "<br><br>";
	}

	public function sortArray() {
		echo "<h4>3. Function :<b> rsort()</b></h4>";
		echo "<p>This function sorts the array in reverse order: <p>";
		rsort($this->sampleArray);
		print_r($this->sampleArray);
		echo "<br><br>";
	}

	public function rancArray() {
		echo "<h4>4. Function :<b> array_rand()</b></h4>";
		echo "<p>This function returns a random element from the array<p>";
		echo "random number :".array_rand($this->sampleArray);
		echo "<br><br>";
	}

	public function pushArray() {
		echo "<h4>5. Function :<b> array_push()</b></h4>";
		echo "<p>This function adds an element at the end of the string <p>";
		array_push($this->sampleArray,10);
		print_r($this->sampleArray);
		echo "<br><br>";
	}

	public function searchArray() {
		echo "<h4>6. Function :<b> array_search()</b></h4>";
		echo "<p>This function searches for an element<p>";
		$elem = 10;
		echo "position of element ".$elem." is at: ".array_search($elem, $this->sampleArray);
		echo "<br><br>";
	}

	public function shuffleArray() {
		echo "<h4>7. Function : <b> shuffle()</b></h4>";
		echo "<p>This function shuffles the array:<p>";
		shuffle($this->sampleArray);
		print_r($this->sampleArray);
		echo "<br><br>";
	}

	public function sliceArray() {
		echo "<h4>8. Function :<b> array_slice()</b></h4>";
		echo "<p>THis function slices the array: <p>";
		print_r(array_slice($this->sampleArray,2,4));
		echo "<br><br>";
	}

	public function shiftArray() {
		echo "<h4>9. Function :<b> array_shift()</b></h4>";
		echo "<p>This function removes and return the first element from the array<p>";
		echo "removes element :".array_shift($this->sampleArray)."<br>";
		print_r($this->sampleArray);
		echo "<br><br>";
	}

	public function chunkArray() {
		echo "<h4>10. Function :<b> array_chunk()</b></h4>";
		echo "<p>This function splits the array into chunks of new arrays :<p>";
		print_r(array_chunk($this->sampleArray,3));
		echo "<br><br>";
	}

#*********************************************************************************************************

	public function stringFunctions() {
		echo '<h3>String functions: </h3><hr>';
		$this->explodeString();
		echo "<hr><hr>";
	}

	public function explodeString() {
		echo "<h4>1. Function :<b> explode()</b></h4>";
		echo "<p>This function seperate the string into an array <p>";
		print_r(explode(" ",$this->sampleString));
		echo "<br><br>";
	}

	public function pString() {
		echo "<h4>2. Function :<b> </b></h4>";
		echo "<p> <p>";
		echo "<br><br>";
	}
}

?>
