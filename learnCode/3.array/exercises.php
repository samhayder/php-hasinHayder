<?php

/*1. Write a script which will display the following string -
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
and the words 'red', 'green' and 'white' will come from $color.*/

$color = ['white', 'green', 'red', 'blue', 'black'];
printf( "The memory of that scene for me is like a frame of film forever frozen at that moment: the %s carpet, the %s lawn, the %s house, the leaden sky. The new president and his first lady. - Richard M. Nixon.and the words '%s', '%s' and '%s' will come from", $color[2], $color[1], $color[0], $color[2], $color[1], $color[0] );

/* 2. Write a PHP script which will display the colors in the following way :
Output :
white, green, red,

 *green
 *red
 *white
 */
$colors = array( 'white', 'green', 'red' );

sort( $colors );
foreach ( $colors as $color ) {
    echo "<li>{$color}</li> \n";
}
