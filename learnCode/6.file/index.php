<?php

// File Read
$fileURL = "d:\\php-hasinHayder\\learnCode\\6.file\\data\\readme.php";
if ( is_readable( $fileURL ) ) {
// echo getcwd();

// $rf = readfile( "r.txt" );

    $fp = fopen( $fileURL, "r" );
// $line = fgets($fp);

    while ( $line = fgets( $fp ) ) {
        echo $line;
    }

    rewind( $fp ); // cursor first
// fseek($fp,0, SEEK_END); // cursor specific indicate

// file_get_contents($file);

// $data = file($file);

    fclose( $fp );

}

// File Write
if ( is_writable( $fileURL ) ) {
    $fp = fopen( $fileURL, "r+" );

    //  $fr = file_get_contents( $fileURL );
    fwrite( $fp, "Twelve Month List" );
    rewind( $fp );
    fclose( $fp );
}

/* Data Process */
$studentData = "d:\\php-hasinHayder\\learnCode\\6.file\\data\\data-process.txt";

$students = array(
    array(
        'fname' => "Samsuddin",
        'lname' => "Hayder",
        'age'   => 29,
        'class' => "Four",
        'roll'  => 25,
    ),
    array(
        'fname' => "Salman",
        'lname' => "Yasin",
        'age'   => 10,
        'class' => "Two",
        'roll'  => 05,
    ),
    array(
        'fname' => "Suriya",
        'lname' => "Jannat",
        'age'   => 02,
        'class' => "Play",
        'roll'  => 11,
    ),
);

$fp = fopen( $studentData, 'w' );

foreach ( $students as $student ) {
    /* $data = sprintf( "%s, %s, %d, %s, %d \n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll'] );
    fwrite( $fp, $data ); */
    fputcsv( $fp, $student );
}
fclose( $fp );

// file read
$fp = fopen( $studentData, 'r' );
/* while ( $data = fgets( $fp ) ) {
$student = explode( ",", $data );
printf( "Name = %s %s\nAge = %d\nClass = %s\nRoll = %d\n\n", $student[0], $student[1], $student[2], $student[3], $student[4], );
} */
while ( $student = fgetcsv( $fp ) ) {
    printf( "Name = %s %s\nAge = %d\nClass = %s\nRoll = %d\n\n", $student[0], $student[1], $student[2], $student[3], $student[4], );
}
fclose( $fp );

// Append new student
$newStudent = array(
    'fname' => "Balby",
    'lname' => "Akter",
    'age'   => 02,
    'class' => "Play",
    'roll'  => 11,
);

$fp = fopen( $studentData, 'a' );
fputcsv( $fp, $newStudent );
fclose( $fp );
