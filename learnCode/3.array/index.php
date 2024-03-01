<?php

$lists = ["List 1", "list 2", "list 3"];

// var_dump( $lists );

$listLength = count( $lists );
for ( $i = 0; $i < $listLength; $i++ ) {
    // echo $lists[$i] . "\n";
}

/** Array Manipulations
 *
 * $lists[2] = "List Three";
 *
 *  $lists[] = "List 4"; Add item last index
 * array_push($lists, "list 5"); add item last index
 *
 * array_unshift($lists, "list 0"); add item first index
 *
 * array_shift($lists); remove item first index
 *
 * array_pop($lists); remove item last index
 */

/* Associative Array */
$menu = [
    "drink" => "Coffee, Tea, Water",
    "beef"  => "Masala Beef, Mejbani Beef",
];
// add item
$menu["beef"] .= "Chuijal Beef";

// print_r( $menu );

// first way to print associative array
foreach ( $menu as $key => $value ) {
    // echo "$key => $value \n";
}

/* Convert string & array  */
$students = "samsuddin, hayder, yasin,salman,bably, jannat";
$strToArr = preg_split( "/(, |,)/", $students ); //delimiter
// var_dump( $strToArr );

$arrToStr = join( ', ', $strToArr );
// var_dump( $arrToStr );

/* Multi Dimension Array */
$sample = [
    [1, 2, 3, 4],
    [5, 6, 7, 8, 9],
    [10, 
        [11, 22, 33, 44,]
    ],
    [5, 6, 7],
];
print_r($sample);

echo $sample[2][1][3];