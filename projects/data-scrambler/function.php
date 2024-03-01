<?php

$task = $_GET['task'] ?? "encode";

$key = "abcdefghijklmnopqrstuvwxyz1234567890";

// Display Encode Key => key input
function displayKey( $key ) {
    printf( " value = '%s'", $key );
}

// Generator Key => Shuffle the original key
function generatorKey() {
    global $task, $key;

    if ( 'key' == $task ) {
        $_key = str_split( $key );
        shuffle( $_key );
        $key = join( '', $_key );
    } else if ( isset( $_POST['key'] ) && $_POST['key'] != '' ) {
        $key = $_POST['key'];
    }
}
generatorKey();
