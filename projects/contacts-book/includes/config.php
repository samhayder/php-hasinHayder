<?php
// Define constant value Base URL
define( 'BASEURL', "/php-hasinHayder/projects/contacts-book/" );

// Print Arr
function print_arr( $arr ) {
    echo "<pre>";
    print_r( $arr );
    exit();
}

// Show UI Error Messages
function errorMsg() {
    if ( isset( $_SESSION['errors'] ) ) {
        ?>
<div class="alert alert-danger">
  <p>There are following error(s) fund...</p>
  <?php
foreach ( $_SESSION['errors'] as $error ) {
            print "<li>$error</li>";
        }
        ?>
</div>
<?php
unset( $_SESSION['errors'] );
    }
}

// Show UI Error Messages
function successMsg() {
    if ( isset( $_SESSION['success'] ) ) {
        ?>
<div class="alert alert-success text-center">
  <?php echo $_SESSION['success']; ?>
</div>
<?php
unset( $_SESSION['success'] );
    }
}

?>
