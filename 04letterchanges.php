<?php

header('Content-type: text/html; charset=utf-8');

echo <<<_END
<h1>Easy Challenge 4: PHP: Letter Changes</h1>
<p>Using the PHP language, have the function LetterChanges(str) take the str parameter
being passed and modify it using the following algorithm. Replace every letter in the 
string with the letter following it in the alphabet (ie. c becomes d, z becomes a). Then 
capitalize every vowel in this new string (a, e, i, o, u) and finally return this modified 
string.</p>
_END;

function LetterChanges($str){
  $str = strtolower($str);
  $repStr = '';
  $changed = '';
  
  for ($i = 0; $i < strlen($str); $i++) {
    $letter = substr($str, $i, 1);
      if (preg_match('/[a-y]/',$letter)) {
        $numbers = ord($letter) + 1;
        $repStr = $repStr . chr($numbers);
      }
      if (preg_match('/z/', $letter)) {
        $repStr = $repStr . "a";
      }
      
      if (preg_match('/[^a-z]/', $letter)) {
        $repStr = $repStr . $letter;
      }
  }

  for ($i = 0; $i < strlen($repStr); $i++) {
    $char = substr($repStr, $i, 1);
      if (preg_match('/[^aeiou]/',$char)) {
        $changed = $changed . $char;
      } else {
        $changed = $changed . strtoupper($char);
      }
  }
    
return $changed;
}

echo LetterChanges('benny the Bum') . '<br>' .
     LetterChanges('rush to RaINbows') . '<br>' . 
     LetterChanges('musty') . '<br>' . 
     LetterChanges('catty ran back');
     
 /* 03/25/2016
    This solution uses ASC II encoding ?
    First attempted replace() rep substr rep?? didn't work ?? try these
 */

?>