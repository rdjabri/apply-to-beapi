<?php

// DISPLAY

// Question 1 

echo "string";

// Question 2

echo "salut22";

// Question 3

echo htmlspecialchars("hello&%");

// Question 4

$cond = true;

if(!$cond)
	echo "false";
else
	echo "true";

// Question 5 

echo "Salut " . "BE" . "Api";

// LOOPS

// Question 1

$i = 1;
while ($i <= 100) {
	echo $i++;
}

// Question 2 

for ($i=1; $i <= 100 ; $i++) { 
	echo $i;
}

// Question 3

function myLoop($i = 1){
	while ($i <= 100) {
		echo $i++;
	}
}

myLoop();

// Question 4

function myMax($max){
	$i = 1;
	while($i <= $max){
		echo $i++;
	}
}

myMax(20);

// ARRAYS

// Question 1

$myArray = array('5', '12', '10', '21', '2', '6', '8', '20', '14', '9', '12' );

foreach ($myArray as $element) {
	echo $element;
}

// Question 2

$average = array_sum($myArray);

// Question 3

function moreThanTen($myArray, $minValue){
	$cpt = 0;

	foreach($myArray as $element){
		if ($element >= $minValue)
			$cpt++;
	}
	return $cpt;
}

echo moreThanTen($myArray, '10');

// Question 4

echo array_key_exists('20', $myArray);

// Question 5 

echo max($myArray);


?>