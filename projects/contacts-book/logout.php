<?php
ob_start();
session_start();

// Include Config
require_once "includes/config.php";

if ( isset( $_SESSION['user'] ) ) {
    unset( $_SESSION['user'] );
    session_destroy();
    header( 'location:' . BASEURL );
    exit();
}
