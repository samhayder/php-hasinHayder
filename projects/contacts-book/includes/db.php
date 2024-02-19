<?php

// Database get connection function
function db_connect() {
    $host = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "contacts-book";

    $conn = mysqli_connect( $host, $dbUser, $dbPassword, $dbName ) or die( "Database connection error" . mysqli_connect_error() );

    return $conn;
}

// Database connection close function
function db_close( $conn ) {
    mysqli_close( $conn );
}
