<?php
ob_start();
session_start();

// Include Config
require_once "../includes/config.php";
// Include Database
require_once "../includes/db.php";

$errors = errorMsg() ?? [];

// Input Sanitize
$firstName = filter_input( INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$lastName = filter_input( INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$email = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$phone = filter_input( INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$address = filter_input( INPUT_POST, 'address', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$photoFile = $_FILES['photo'] ?? [];
$contactId = $_POST['contactid'] ?? '';

if ( isset( $_POST ) && !empty( $_SESSION['user'] ) ) {
    // Input Validation
    if ( empty( $firstName ) ) {
        $errors[] = "First Name can't be empty.";
    }
    if ( empty( $email ) ) {
        $errors[] = "Email can't be empty.";
    } else if ( !empty( $email ) && !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        $errors[] = "Invalid Email Address.";
    }
    if ( empty( $phone ) ) {
        $errors[] = "Phone number can't be empty.";
    } else if ( !empty( $phone ) && !is_numeric( $phone ) ) {
        $errors[] = "Phone number should be provide numeric.";
    } else if ( !empty( $phone ) && ( strlen( $phone ) < 11 || strlen( $phone ) > 11 ) ) {
        $errors[] = "Insufficient/Large phone number.";
    }
    if ( empty( $address ) ) {
        $errors[] = "Address can't be empty.";
    }

    // Error is not empty
    if ( !empty( $errors ) ) {
        $_SESSION['errors'] = $errors;
        header( 'location:' . BASEURL . 'add-contact.php' );
        exit();
    }

    /* File Uploaded */
    $photoName = "";
    if ( !empty( $photoFile['name'] ) ) {
        $filename = $photoFile['name'];
        $fileTempPath = $photoFile['tmp_name'];
        $fileNameComposition = explode( ".", $filename );
        $fileExtension = strtolower( end( $fileNameComposition ) );
        $fileNewName = md5( time() . $filename ) . '.' . $fileExtension;
        $photoName = $fileNewName;

        // Allowed extension
        $allowedExtension = ["jpg", "jpeg", "png", "gif"];

        if ( in_array( $fileExtension, $allowedExtension ) ) {
            $uploadFileDir = "../uploads/photos/";
            $destiFilePath = $uploadFileDir . $photoName;
            if ( !move_uploaded_file( $fileTempPath, $destiFilePath ) ) {
                $errors[] = "File couldn't be uploaded.";
            }
        } else {
            $errors[] = "Invalid photo (file) extension.";
        }
    }

    /* Connect Database */
    $ownerId = $_SESSION['user']['id'] ?? 0;
    $conn = db_connect();

    // Contact create & update
    if ( !empty( $contactId ) ) {
        // Updated exiting contact
        if ( !empty( $photoName ) ) {
            $sql = "UPDATE `contacts` SET first_name = '{$firstName}', last_name = '{$lastName}', email = '{$email}', phone = '{$phone}', address = '{$address}', photo = '{$photoName}' WHERE id={$contactId} AND owner_id ={$ownerId}";
        } else {
            $sql = "UPDATE `contacts` SET first_name = '{$firstName}', last_name = '{$lastName}', email = '{$email}', phone = '{$phone}', address = '{$address}' WHERE id={$contactId} AND owner_id ={$ownerId}";
        }

        $message = "Contact hsa been updated successfully.";

    } else {
        // add new contact
        $sql = "INSERT INTO `contacts` (first_name, last_name, email, phone, address, photo, owner_id) VALUES ('{$firstName}', '{$lastName}', '{$email}', '{$phone}', '{$address}', '{$photoName}', '{$ownerId}')";

        $message = "New contact hsa been successfully added.";
    }

    if ( mysqli_query( $conn, $sql ) ) {
        db_close( $conn );

        $_SESSION['success'] = $message;
        header( 'location:' . BASEURL );
        exit();
    }
}
