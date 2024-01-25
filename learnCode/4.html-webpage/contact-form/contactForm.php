<?php

if ( isset( $_POST['submit'] ) ) {
    if ( isset( $_POST['name'] ) && !empty( $_POST['name'] ) ) {
        $name = filter_input( INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
    }

    if ( isset( $_POST['email'] ) && !empty( $_POST['email'] ) ) {
        $emailForm = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
    }

    if ( isset( $_POST['password'] ) && !empty( $_POST['password'] ) ) {
        $password = filter_input( INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
    }

    if ( isset( $_POST['website'] ) && !empty( $_POST['website'] ) ) {
        $website = filter_input( INPUT_POST, 'website', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
    }

    if ( isset( $_POST['message'] ) && !empty( $_POST['message'] ) ) {
        $message = filter_input( INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
    }

}
