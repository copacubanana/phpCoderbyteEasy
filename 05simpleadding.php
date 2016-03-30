<?php

echo <<<_END
<h1>Coderbyte: 05/36 Easy Challenges: Simple Adding</h1>
<p>Using the PHP language, have the function SimpleAdding(num) add up all the numbers 
from 1 to num. For the test cases, the parameter num will be any number from 1 to 1000.</p> 
_END;

function SimpleAdding($num) {
$count = 0;

  for ($i = 1; $i <= $num; $i++) {
    $count = $count + $i;
  }

return $count;
}

echo SimpleAdding(10) . '<br>' .
     SimpleAdding(5) . '<br>' .
     SimpleAdding(1);

?>