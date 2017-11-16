<?php
// Turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);



// Class to load classes it finds the file when the program starts to fail for calling a missing class

class Manage {
	public static function autoload($class) {
		include $class . '.php';
	}
}

spl_autoload_register(array('Manage', 'autoload'));

// Instantiate new object
$obj = new main();

class main {
	// Add a property for html text 
	private $html;

	// Constructor is the first to run and where the main program goes
	public function __construct() {
		
		// Intialize variables at the top
		$str = 'My name is Michelle';
		$familyArray = array('Father' => 'Chris', 'Mother' => 'Claire', 'Sister' => 'Allison', 'Dog' => 'Finn');
		
		// Call static methods here

		$this->html .= htmlTags::heading('STRING FUNCTIONS');
		$this->html .= htmlTags::horizontalRule();


		// Reverse String 
		$this->html .= htmlTags::heading('1. Reverse String Demo:');
		$this->html .= stringFunctions::reverseThis($str);
		$this->html .= htmlTags::horizontalRule();

		// Uppercase String
		$this->html .= htmlTags::heading('2. Uppercase String Demo:');
		$this->html .= stringFunctions::uppercaseThis($str);
		$this->html .= htmlTags::horizontalRule();

		// Repeat String 
		$this->html .= htmlTags::heading('3. Repeat String Demo:');
		$this->html .= stringFunctions::repeatThis($str);
		$this->html .= htmlTags::horizontalRule();

		// String Length
		$this->html .= htmlTags::heading('4. Length Demo:');
		$this->html .= stringFunctions::countThis($str);
		$this->html .= htmlTags::horizontalRule();

		// Shuffle String
		$this->html .= htmlTags::heading('5. Shuffle String Demo:');
		$this->html .= stringFunctions::shuffleThis($str);
		$this->html .= htmlTags::horizontalRule();

		// Lowercase String
		$this->html .= htmlTags::heading('6. Lowercase String Demo:');
		$this->html .= stringFunctions::lowercaseThis($str);
		$this->html .= htmlTags::horizontalRule();

		// Rot13
		$this->html .= htmlTags::heading('7. Rot 13 String Demo:');
		$this->html .= stringFunctions::rot13This($str);
		$this->html .= htmlTags::horizontalRule();

		// Replace substring
		$this->html .= htmlTags::heading('8. Substring Replace Demo:');
		$this->html .= stringFunctions::replaceThis($str);
		$this->html .= htmlTags::horizontalRule();

		// Return substring
		$this->html .= htmlTags::heading('9. Return Substring Demo:');
		$this->html .= stringFunctions::returnThis($str);
		$this->html .= htmlTags::horizontalRule();

		// Titlecase String
		$this->html .= htmlTags::heading('10. Ucwords Demo:');
		$this->html .= stringFunctions::titlecaseThis($str);
		$this->html .= htmlTags::horizontalRule();

		// Start of Array Functions //

		$this->html .= htmlTags::heading('ARRAY FUNCTIONS');
		$this->html .= htmlTags::horizontalRule();

		// Print Array
		$this->html .= htmlTags::heading('1. Print Array Demo:');
		$this->html .= arrayFunctions::printArray($familyArray);
		$this->html .= htmlTags::horizontalRule();

		// Count Array
		$this->html .= htmlTags::heading('2. Count Array Demo:');
		$this->html .= arrayFunctions::countArray($familyArray);
		$this->html .= htmlTags::horizontalRule();

		// Shuffle Array
		$this->html .= htmlTags::heading('3. Shuffle Array Demo:');
		$this->html .= arrayFunctions::shuffleArray($familyArray);
		$this->html .= htmlTags::horizontalRule();

		// Slice Array
		$this->html .= htmlTags::heading('4. Slice Array Demo:');
		$this->html .= arrayFunctions::sliceArray($familyArray);
		$this->html .= htmlTags::horizontalRule();

		// Search Array for Key
		$this->html .= htmlTags::heading('5. Array Key Exists Demo:');
		$this->html .= arrayFunctions::searchArrayForKey($familyArray);
		$this->html .= htmlTags::horizontalRule();

		// Search Array for Value
		$this->html .= htmlTags::heading('6. Array Value Exists Demo:');
		$this->html .= arrayFunctions::searchArrayForValue($familyArray);
		$this->html .= htmlTags::horizontalRule();

		// Sort Array by Key
		$this->html .= htmlTags::heading('7. Sort Array By Key Demo:');
		$this->html .= arrayFunctions::sortByKey($familyArray);
		$this->html .= htmlTags::horizontalRule();

		// Sort Array by Value
		$this->html .= htmlTags::heading('8. Sort Array By Value Demo:');
		$this->html .= arrayFunctions::sortByValue($familyArray);
		$this->html .= htmlTags::horizontalRule();

		// Return Random Key
		$this->html .= htmlTags::heading('9. Return Random Key Demo:');
		$this->html .= arrayFunctions::returnArrayKey($familyArray);
		$this->html .= htmlTags::horizontalRule();

		// Flip Array
		$this->html .= htmlTags::heading('10. Flip Array Demo:');
		$this->html .= arrayFunctions::flipArray($familyArray);
		$this->html .= htmlTags::horizontalRule();


	}

	// destructor is the last to run and where the html property is printed

	public function __destruct() {
		stringFunctions::printThis($this->html);

	}
}





?>