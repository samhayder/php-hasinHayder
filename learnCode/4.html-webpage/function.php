<?php
function isChecked( $type, $value ) {
    if ( isset( $_GET[$type] ) && is_array( $_GET[$type] ) && in_array( $value, $_GET[$type] ) ) {
        echo " checked";
    }
}

// Input Option function
function inputOption($options) {
    foreach($options as $option) {
        printf("<option value='%s'>%s</option> \n", strtolower($option), ucwords($option));
    }
}
