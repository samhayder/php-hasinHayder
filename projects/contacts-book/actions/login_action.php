<?php
ob_start();
session_start();

// Include Config
require_once "../includes/config.php";
// Include Database
require_once "../includes/db.php";

$errors = errorMsg() ?? [];

// Inputs Sanitize
$email = filter_input( INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$password = filter_input( INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS );

if ( isset( $_POST ) ) {
    // Inputs Validation
    if ( empty( $email ) ) {
        $errors[] = "Email can't be blank.";
    } else if ( !empty( $email ) && !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        $errors[] = "Invalid email address.";
    }
    if ( empty( $password ) ) {
        $errors[] = "Password can't be blank.";
    }

    // if error is not empty
    if ( !empty( $errors ) ) {
        $_SESSION['errors'] = $errors;
        header( 'location:' . BASEURL . 'login.php' );
        exit();
    }

    // if error is empty
    if ( !empty( $email ) && !empty( $password ) ) {
        $conn = db_connect();
        $sql = "SELECT * FROM `user` WHERE `email` = '{$email}'";
        $sqlResult = mysqli_query( $conn, $sql );

        if ( mysqli_num_rows( $sqlResult ) > 0 ) {
            $userInfo = mysqli_fetch_assoc( $sqlResult );

            // check password is match this email
            if ( !empty( $userInfo ) ) {
                $passwordInDb = $userInfo['password'];
                if ( password_verify( $password, $passwordInDb ) ) {
                    unset( $userInfo['password'] );
                    $_SESSION['user'] = $userInfo;
                    header( "location:" . BASEURL );
                } else {
                    $errors[] = "Password can't be match.";
                    $_SESSION['errors'] = $errors;
                    header( 'location:' . BASEURL . 'login.php' );
                }
            }
        } else {
            $errors[] = "Email can't be match.";
            $_SESSION['errors'] = $errors;
            header( 'location:' . BASEURL . 'login.php' );
        }
    }

}
