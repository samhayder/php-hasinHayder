<?php
session_name( "myApp" );
session_start( [
    "cookies_lifetime" => 5,
] );
$_SESSION['visitor'] = $_SESSION['visitor'] ?? 0;
$_SESSION['visitor']++;

echo $_SESSION['visitor'];
