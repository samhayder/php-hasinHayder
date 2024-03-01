<?php

$student = [
    "fName"   => "Salman",
    "lName"   => "Yasin",
    "age"     => 7,
    "class"   => "Two",
    "section" => "A",
    "roll"    => 28,
];

print_r( $student );

/* Associative array to convert String */

// First Way => serialize
$serialized = serialize( $student );

$unSerialized = unserialize( $serialized );

echo $serialized;
echo "\n";
print_r( $unSerialized );

// Second Way => JSON encode
$jsonEncode = json_encode( $student );
echo $jsonEncode;
echo "\n";

$jsonDecode = json_decode( $jsonEncode, true );
print_r( $jsonDecode );

/* Array slice */
$sliceArr = array_slice( $student, 1 );
print_r( $sliceArr );

/* Array splice */
$spliceArr = array_splice( $student, 2, -2 );
print_r( $spliceArr );

/* Array Merge */
$arr1 = [1, 2, 4, 56, 5, 9, 81];
$arr2 = [3, 4, 67];
$arr3 = array_merge( $arr1, $arr2 );
print_r( $arr3 );

/* Array Sort */
sort( $arr1 );
rsort( $arr1 );
print_r( $arr1 );

/* Associative array sort */
$phoneLists = [
    "Saiful Islam" => "One",
    "Samsuddin"    => 15,
    "Mahabuba"     => "15",
    "Bably"        => 31,
];
// sort($phoneLists); // Remove key
asort( $phoneLists );
ksort( $phoneLists );
print_r( $phoneLists );

/* Array Search */
//search array item
if ( in_array( 15, $phoneLists ) ) {
    echo "15 is here \n";
} else {
    echo "not fount";
}

// search index
$arrSearch = array_search( 15, $phoneLists );
echo $arrSearch;

// check key value
if ( key_exists( "Samsuddin", $phoneLists ) ) {
    echo "exists";
}

/* Array Intersection */
$num1 = [3, 4, 56, 78, 2];
$num2 = [4, 65, 34, 2, 3, 1, 0];

$str1 = ["a" => 1, "b" => 2, "e" => 3, "d" => 4];
$str2 = ["f" => 17, "g" => 92, "e" => 12, "d" => 4];

$numIntersect = array_intersect( $num1, $num2 );
$numIntersect2 = array_intersect( $num2, $num1 );
// print_r( $numIntersect );
// print_r( $numIntersect2 );

$strIntersect = array_intersect( $str1, $str2 );
$strIntersect2 = array_intersect_assoc( $str2, $str1 );
print_r( $strIntersect );
print_r( $strIntersect2 );

// array_diff

// array_walk(arr, 'FN');

// array_map('FN', arr);

// array_filter(arr, 'FN'); FN => callback function


/* Array Reduce */
$numSum = [1,2,3,4,5,6,7,8];

function sum ($oldValue = 0, $newValue) {
    return $oldValue + $newValue;
}

$arrReduce = array_reduce($numSum, 'sum');
print_r($arrReduce);