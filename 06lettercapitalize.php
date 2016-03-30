<?php

echo <<<_END
<h1>Coderbyte: 06/36 Easy Challenges: Letter Capitalize</h1>
<p> Using the PHP language, have the function LetterCapitalize(str) take the str parameter
being passed and capitalize the first letter of each word. Words will be separated by 
only one space.</p>
_END;

function LetterCapitalize($str) {

return ucwords($str);
}

echo LetterCapitalize("hello world") . '<br>' . // "Hello World" 
     LetterCapitalize("i ran there") . '<br>' . // "I Ran There"
     LetterCapitalize("la la laughing"); // "La La Laughing";
     
?>