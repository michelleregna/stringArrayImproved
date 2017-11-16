<?php 
	class arrayFunctions {
		static public function printArray($array) {
			return print_r($array, TRUE); // Need TRUE otherwise returns int
		}

		static public function countArray($array) {
			return count($array);
		}

		static public function shuffleArray($array) {
			shuffle($array);
			return print_r($array, TRUE);
		}

		static public function sliceArray($array) {
			$parentsArray = array_slice($array, 0, 2);
			return print_r($parentsArray, TRUE);
		}

		static public function searchArrayForKey($array) {
			return array_key_exists('Sister', $array);
		}

		static public function searchArrayForValue($array) {
			return in_array('Finn', $array);
		}

		static public function sortByKey($array) {
			ksort($array);
			return print_r($array, TRUE);
		}

		static public function sortByValue($array) {
			asort($array);
			return print_r($array, TRUE);
		}

		static public function returnArrayKey($array) {
			return array_rand($array);
		}

		static public function flipArray($array) {
			$flipped = array_flip($array);
			return print_r($flipped, TRUE);			
		}
	}