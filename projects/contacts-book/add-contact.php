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
$contactId = $_GET['id'] ?? '';

if ( !empty( $contactId ) && is_numeric( $contactId ) ) {
    $conn = db_connect();
    $_contactId = mysqli_real_escape_string( $conn, $contactId );
    $contactSql = "SELECT * FROM `contacts` WHERE `id` = {$_contactId} AND `owner_id` = {$userId}";
    $contactSqlResult = mysqli_query( $conn, $contactSql );
    $contactNumRows = mysqli_num_rows( $contactSqlResult );

    if ( $contactNumRows > 0 ) {
        $contact = mysqli_fetch_assoc( $contactSqlResult );
    } else {
        $errors[] = "Record doesn't exit.";
    }

    db_close( $conn );
} else {
    $errors[] = "Invalid contact id.";
}

// Set Input Data
$first_name = $contact['first_name'] ?? '';
$last_name = $contact['last_name'] ?? '';
$email = $contact['email'] ?? '';
$phone = $contact['phone'] ?? '';
$address = $contact['address'] ?? '';
?>

<main role="main" class="container py-5">
  <div class="row justify-content-center wrapper">
    <div class="col-md-6">
      <!-- Show Error Message -->
      <?php errorMsg();?>

      <div class="card">
        <header class="card-header">
          <h4 class="card-title mt-2">Add/Edit Contact</h4>
        </header>
        <article class="card-body">
          <form method="POST"
            action="<?php echo BASEURL; ?>actions/add-contact_action.php"
            enctype="multipart/form-data">
            <div class="form-row">
              <div class="col form-group">
                <label>First Name </label>
                <input type="text" name="fname"
                  value="<?php echo $first_name; ?>" class="form-control"
                  placeholder="First Name">
              </div>
              <div class="col form-group">
                <label>Last Name</label>
                <input type="text" name="lname"
                  value="<?php echo $last_name; ?>" class="form-control"
                  placeholder="Last Name">
              </div>
            </div>
            <div class="form-group">
              <label>Email Address</label>
              <input type="email" name="email" value="<?php echo $email; ?>"
                class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label>Phone No.</label>
              <input type="text" name="phone" value="<?php echo $phone; ?>"
                class="form-control" placeholder="Contact">
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" name="address" value="<?php echo $address; ?>"
                class="form-control" placeholder="Address">
            </div>
            <div class="form-group input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="photo">Photo</span>
              </div>
              <div class="custom-file">
                <input type="file" name="photo" class="custom-file-input"
                  id="contact_photo">
                <label class="custom-file-label" for="contact_photo">Choose
                  file</label>
              </div>
            </div>
            <div class="form-group">
              <input type="hidden" name="contactid"
                value="<?php echo $contactId; ?>" />
              <button type="submit"
                class="btn btn-primary btn-block">Submit</button>
            </div>
          </form>
        </article>
      </div>
    </div>

  </div>

  <?php
// Footer
include_once "components/footer.php";
?>
