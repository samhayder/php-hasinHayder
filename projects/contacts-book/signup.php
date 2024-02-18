<?php
// Include Base URL
require_once "includes/config.php";
// Header
include_once "components/header.php";
// Login Nav
include_once "components/login-nav.php";
?>

<main role="main" class="container">
  <style>
  .wrapper {
    padding-top: 30px;
  }

  </style>
  <div class="row justify-content-center wrapper">
    <div class="col-md-6">

      <div class="card">
        <header class="card-header">
          <h4 class="card-title mt-2">Sign up</h4>
        </header>
        <article class="card-body">
          <form method="POST" action="<?php echo BASEURL;?>register.php">
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
                placeholder="">
              <small class="form-text text-muted">We'll never share your email
                with anyone else.</small>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input class="form-control" type="password" name="password">
            </div>
            <div class="form-group">
              <label>Confirm Password</label>
              <input class="form-control" type="password" name="cpassword">
            </div>
            <div class="form-group">
              <button type="submit" name="register"
                class="btn btn-primary btn-block"> Register</button>
            </div>

          </form>
        </article>
        <div class="border-top card-body text-center">Have an account? <a
            href="<?php echo BASEURL;?>login.php">Log In</a></div>
      </div>
    </div>

  </div>

  <?php 
 // Footer
 include_once "components/footer.php";
?>
