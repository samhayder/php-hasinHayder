<?php

// Function write & execute
function isEven( $n ) {
    if ( $n % 2 == 0 ) {
        return true;
    }
    return false;
}

$x = 12;

if ( isEven( $x ) ) {
    echo "$x is Even Number \n";
} else {
    echo "$x is Odd Number \n";
}

// Function Parameter type Hinting & check
function factorial( int $n ) {
    // if (gettype($n) != "Integer") return "Invalid Number";

    $result = 1;
    for ( $i = $n; $i > 1; $i-- ) {
        $result *= $i;
    }
    return $result;
}

echo "Factorial \n" . factorial( 5 );

// Default Parameter set
function serve($foodType = "Coffee", $numberOfItem = "1 Cup") {
   echo "$numberOfItem $foodType has/have been served \n";
}
serve();
serve("Salad", "2 Plates");

// Accept unlimited Argument
function sum ( ...$numbers):int {
   $result = 0;

   for ($i = 0; $i < count($numbers); $i++) {
      $result += $numbers[$i];
   }
   return $result;
}

echo sum(2,4,5);
