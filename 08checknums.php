<?php

echo <<<_END
<p> Using the JavaScript language, have the function CheckNums(num1,num2) take both 
parameters being passed and return the string true if num2 is greater than num1, otherwise
return the string false. If the parameter values are equal to each other then return the
string -1. </p>
_END;

function CheckNums($num1,$num2) {
return 'cats';
}

echo CheckNums(3, 122) . '<br>' . // true
     CheckNums(67, 67);          // -1

?>