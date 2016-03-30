<?php

echo <<<_END
<h1>Coderbyte: 07/36 Easy Challenges: Letter Capitalize</h1>
<p>Using the PHP language, have the function SimpleSymbols(str) take the str 
parameter being passed and determine if it is an acceptable sequence by either returning 
the string true or false. The str parameter will be composed of + and = symbols with 
several letters between them (ie. ++d+===+c++==a) and for the string to be true each 
letter must be surrounded by a + symbol. So the string to the left would be false. The 
string will not be empty and will have at least one letter.</p>
_END;

function SimpleSymbols($str) {
$regx = "/[a-z]{1}/";
$regx2 = "/[\+]{1}/";

  for ($i = 0; $i < strlen($str); $i++) {
    if ( preg_match($regx, substr($str,$i,1)) ) {
      if ($i == 0 || $i == strlen($str)-1 ||
          preg_match($regx2, substr($str,$i-1,1)) == 0 || 
          preg_match($regx2, substr($str,$i+1,1)) == 0 ) {
        return "false"; 
      }
    }    
  }
return "true";
}

echo SimpleSymbols("+d+=3=+s+") . '<br>' . // "true" 
     SimpleSymbols("f++d+")     . '<br>' . // "false"
     SimpleSymbols("+d===+a+")  . '<br>' . // "false"
     SimpleSymbols("+a=")       . '<br>' . // "false"
     SimpleSymbols("==a+")      . '<br>' . // "false" 
     SimpleSymbols("++d+===+c++==a");      // "false"

/* 3/30/2016  Completed

*/
         
?>