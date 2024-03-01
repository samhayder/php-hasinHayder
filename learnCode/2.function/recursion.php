<?php

// Recursive function => Recursion
function printNumber( int $counter, int $end, int $stepping = 1 ) {
    if ( $counter >= $end ) {
        return;
    }

    $counter += $stepping;
    echo $counter . "\n";

    printNumber( $counter, $end, $stepping );
}

printNumber( 1, 10, 2 );

// Fibonacci sires
// 0 1 1 2 3 5 8 ...n;

function fibonacciSires( $new, $end ) {
    static $old, $start;
    $old = $old ?? 0;
    $start = $start ?? 1;

    if ( $start > $end ) {
        return;
    }

    $start++;

    echo $old . " ";

    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacciSires( $new, $end );

}

fibonacciSires( 5, 15 );

// Factorial
function factorial( $number ) {
    if ( $number <= 1 ) {
        return 1;
    }

    return $number * factorial( $number - 1 );
}
echo factorial( 6 );

/** Function Scope
 *
 * global Scope => global $name;
 *
 * Super Global Scope => $GLOBALS['name'];
 *
 * local Scope => only execute this function;
 *
 * static Scope => only execute this function and hold previous data;
 */
