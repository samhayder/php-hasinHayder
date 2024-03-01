<?php
// Include Base URL
require_once "includes/config.php";
// Header
include_once "components/header.php";
// Login Nav
include_once "components/nav.php";

?>

<main role="main" class="container">
  <style>
  .wrapper {
    padding-top: 30px;
  }

  </style>
  <div class="row justify-content-center wrapper">
    <div class="col-md-6">

      <!-- Show Success Message -->
      <?php successMsg();?>

      <!-- Show Error Message -->
      <?php errorMsg();?>

      <div class="card">
        <header class="card-header">
          <h4 class="card-title mt-2 text-center">Update Your Profile</h4>
        </header>
        <article class="card-body">
          <form method="POST"
            action="<?php echo BASEURL . "actions/edit-profile_action.php"; ?>"
            enctype="multipart/form-data">
            <div class="form-row">
              <div class="col form-group">
                <label>First name </label>
                <input type="text" name="fname" class="form-control"
                  placeholder="First Name">
              </div> <!-- form-group end.// -->
              <div class="col form-group">
                <label>Last name</label>
                <input type="text" name="lname" class="form-control"
                  placeholder="Last Name">
              </div> <!-- form-group end.// -->
            </div> <!-- form-row end.// -->
            <div class="form-group">
              <label>Email address</label>
              <input type="text" name="email" class="form-control"
                placeholder="Email Address">
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
              <button type="submit" name="updateProfile"
                class="btn btn-success btn-block"> Update Profile</button>
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
