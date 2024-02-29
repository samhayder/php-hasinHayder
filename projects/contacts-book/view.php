<?php
// Includes Base URL
require_once "includes/config.php";
// Includes Database
require_once "includes/db.php";

// Header
include_once "components/header.php";
// Home Nav
include_once "components/nav.php";

$errors = errorMsg() ?? [];

if ( empty( $_SESSION['user'] ) ) {
    header( 'location:' . BASEURL . 'signup.php' );
    exit();
}

$userId = $_SESSION['user']['id'] ?? 0;
$contactId = $_GET['id'];

if ( !empty( $contactId ) && is_numeric( $contactId ) ) {
    $conn = db_connect();
    $_contactId = mysqli_real_escape_string( $conn, $contactId );
    $contactSql = "SELECT * FROM `contacts` WHERE `id` = {$_contactId} AND `owner_id` = {$userId}";
    $contactSqlResult = mysqli_query( $conn, $contactSql );
    $contactNumRows = mysqli_num_rows( $contactSqlResult );

    if ( $contactNumRows > 0 ) {
        $contactResult = mysqli_fetch_assoc( $contactSqlResult );
    } else {
        $errors[] = "Record doesn't exit.";
    }

    db_close( $conn );
} else {
    $errors[] = "Invalid contact id.";
}
?>

<main role="main" class="container">
  <div class="row justify-content-center wrapper py-5">
    <div class="col-md-6">
      <div class="card">
        <?php
//Show Error Message
errorMsg();
?>
        <header class="card-header">
          <h4 class="card-title mt-2">Contact</h4>
        </header>
        <article class="card-body">
          <div class="container" id="profile">
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <img src="https://via.placeholder.com/50.png/09f/666"
                  width="150" class="img-thumbnail" />
              </div>
              <div class="col-sm-6 col-md-8">
                <h4 class="text-primary">
                  <?php echo ucfirst( $contactResult['first_name'] ) . " " . ucfirst( $contactResult['last_name'] ); ?>
                </h4>
                <p class="text-secondary">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                  <?php echo $contactResult['email']; ?><br />
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <?php echo $contactResult['phone']; ?><br />
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <?php echo $contactResult['address']; ?>
                </p>
                <!-- Split button -->
              </div>
            </div>

          </div>
        </article>

      </div>
    </div>

  </div>

  <?php
// Footer
include_once "components/footer.php";
?>
