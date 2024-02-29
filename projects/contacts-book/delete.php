<?php
ob_start();
session_start();

// Includes Base URL
require_once "includes/config.php";
// Includes Database
require_once "includes/db.php";

$errors = errorMsg() ?? [];

if ( empty( $_SESSION['user'] ) ) {
    header( 'location:' . BASEURL . 'signup.php' );
    exit();
}

$userId = $_SESSION['user']['id'] ?? 0;
$contactId = $_GET['id'] ?? '';

if ( !empty( $contactId ) && is_numeric( $contactId ) ) {
    $conn = db_connect();
    $_contactId = mysqli_real_escape_string( $conn, $contactId );
    $contactSql = "DELETE FROM `contacts` WHERE `id` = {$_contactId} AND `owner_id` = {$userId}";
    $deleteSql = mysqli_query( $conn, $contactSql );

    if ( $deleteSql ) {
        db_close( $conn );
        $_SESSION['success'] = "Contact has been deleted successfully.";
        header( 'location:' . BASEURL );
        exit();
    }

} else {
    $errors[] = "Invalid contact id.";
    exit();
}
