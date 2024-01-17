<?php

/* Output Print */
/* $output = "Global Variable";

echo "{$output}";
echo PHP_EOL;
printf("Print %s \n", $output);

printf("%d Binary is: %b \n", 12, 12); */

// Factorial Number
$factorialNumber = 10;
$count = 0;

for ($i = $factorialNumber, $factorial = 1; $i > 1; $i--) {
   $factorial *= $i;
   $count++;
}
printf("%d Factorial of %d \n", $factorialNumber, $factorial);
echo $count . "\n";

// Fibonacci Sires 
// 0 1 1 2 3 5 8 13 21 ...n
//0 1 2 3 4 5 6 7 8 9 
$n = 10;
$old = 0;
$veryOld = 1;
$new = 1;

for ( $i = 0; $i < $n; $i++) {
   $old  = $new;
   $new = $veryOld + $old;
   $veryOld = $old;
   echo $old . " ";
}

