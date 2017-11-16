<?php
	class stringFunctions {
		static public function printThis($inputText) {
			return print($inputText);
		}

		static public function reverseThis($str) {
			return strrev($str);
		}

		static public function uppercaseThis($str) {
			return strtoupper($str);
		}

		static public function repeatThis($str) {
			return str_repeat($str, 5);
		}

		static public function countThis($str) {
			return strlen($str);
		}

		static public function shuffleThis($str) {
			return str_shuffle($str);
		}

		static public function lowercaseThis($str) {
			return strtolower($str);
		}

		static public function rot13This($str) {
			return str_rot13($str);
		}

		static public function replaceThis($str) {
			return substr_replace($str, 'nombre', 3, 4);
		}

		static public function returnThis($str) {
			return substr($str, 11);
		}

		static public function titlecaseThis($str) {
			return ucwords($str);
		}

	}

