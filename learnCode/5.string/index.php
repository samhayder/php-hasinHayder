<?php 

// String Reverse
$str1 = "samsuddin hayder";

for ($i = strlen($str1); $i >= 0; $i--) {
   echo $str1[$i];
}

echo PHP_EOL;

$strReverse = strrev($str1);
echo $strReverse;

// String Tokenization
$strToken = "I am Mr Samsuddin Hayder. I live in Bangladesh.";
$a = preg_split("/\s/", $strToken);
print_r($a);

echo getcwd();