<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "test";

$conn = mysqli_connect( $host, $db_user, $db_password, $db_name ) or die( "Connection Error" . mysqli_connect_error() );

var_dump( $conn );
