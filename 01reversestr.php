<?php
echo <<<_END
<p>Using the PHP language, have the function FirstReverse(str) take the
"str" parameter being passed and return the string in reversed order.
</p>
_END;

 function FirstReverse($str) {  
  return strrev($str); 
 }

echo FirstReverse('cats') . '<br>' . 
     FirstReverse('Arguments') . '<br>';
/*

// keep this function call here  
echo FirstReverse(fgets(fopen('php://stdin', 'r')));

---------------------fgets() fopen() fclose()-----------------------------
++++ fgets()

The fgets() function returns a line from an open file.
The fgets() function stops returning on a new line, at the specified length, or at EOF, 
whichever comes first.
This function returns FALSE on failure.

++++ fopen()

The fopen() function opens a file or URL.

If fopen() fails, it returns FALSE and an error on failure. You can hide the error output 
by adding an '@' in front of the function name.


$file = fopen("test.txt","r");
echo fgets($file);
fclose($file);
  
*/

?>