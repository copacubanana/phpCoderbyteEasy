<?php

echo <<<_END
<h1>Easy Challenge 2: PHP: First Factorial</h1>
<p>Using the PHP language, have the function FirstFactorial(num) take the num 
parameter being passed and return the factorial of it <br> (ie. if num = 4, 
return (4 * 3 * 2 * 1)). For the test cases, the range will be between 1 and 18.</p>
_END;


function FirstFactorial($num) {
$r = range(1,$num);
$answer = 1;

  foreach ($r as $digit) {
    $answer *= $digit;
  }

return $answer;

}

echo FirstFactorial(5) . '<br>' .
     FirstFactorial(4) . '<br>' .
     FirstFactorial(10);

/*
foreach only works on an array

RANGE IN JAVASCRIPT???

Array.apply(null, Array(5)).map(function (_, i) {return i;});
=> [0, 1, 2, 3, 4]

The map() method creates a new array with the results of calling a provided 
function on every element in this array.

var_dump()
returns datatype and value

print_r()
returns human-readable information about a variable

*/
?>