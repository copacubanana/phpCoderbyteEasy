<?php
echo <<<_END
<h1>Easy Challenge 3: PHP: Longest Word</h1>
<p>Using the PHP language, have the function LongestWord(sen) take the sen parameter being
passed and return the largest word in the string. If there are two or more words that are
the same length, return the first word from the string with that length. Ignore punctuation
and assume sen will not be empty.</p>
_END;

function LongestWord($sen) {
    $replaced = preg_replace('/[^a-zA-Z0-9 ]/', '', $sen); 
    
    $replaced = explode(" ", $replaced);
    $current = '';
    
    for ($i = 0; $i < count($replaced); $i++) {
      if (strlen($replaced[$i]) > strlen($current)) {
        $current = $replaced[$i];
      }
    }
    
    return $current;
    
}

echo LongestWord( "fun&!! time") . '<br>' .  //"time" 
     LongestWord("I love dogs") . '<br>' .  //"love"
     LongestWord("123456789 98765432");  //"123456789"
?>