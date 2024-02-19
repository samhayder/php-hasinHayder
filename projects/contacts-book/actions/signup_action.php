<?php
ob_start();
session_start();

// Include config
require_once "../includes/config.php";

$errors = [];

// Input Sanitize
$firstName = filter_input( INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$lastName = filter_input( INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$email = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$password = filter_input( INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$confirmPassword = filter_input( INPUT_POST, 'cpassword', FILTER_SANITIZE_FULL_SPECIAL_CHARS );

if ( isset( $_POST ) ) {
    // Input Validation
    if ( empty( $firstName ) ) {
        $errors[] = "First Name can't be blank.";
    }

    if ( empty( $email ) ) {
        $errors[] = "Email can't be blank.";
    } else if ( !empty( $email ) && !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        $errors[] = "Invalid Email Address.";
    }

    if ( empty( $password ) ) {
        $errors[] = "Password must be provide.";
    } else if ( $password != $confirmPassword ) {
        $errors[] = "Confirm Password doesn't match.";
    }

    // if errors not empty
    if ( !empty( $errors ) ) {
        $_SESSION['errors'] = $errors;
        header( 'location:' . BASEURL . 'signup.php' );
        exit();
    } else {
        print_arr( $_POST );
    }

}
