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
          <h4 class="card-title mt-2">Sign In</h4>
        </header>
        <article class="card-body">
          <form method="POST" action="<?php echo BASEURL; ?>login_action.php">
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control"
                placeholder="Email">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input class="form-control" type="password" name="password"
                placeholder="password">
            </div>
            <div class="form-group">
              <button type="submit" name="submit"
                class="btn btn-success btn-block"> Login </button>
            </div>
          </form>
        </article>
        <div class="border-top card-body text-center">Haven't an account? <a
            href="<?php echo BASEURL; ?>signup.php">Sign Up</a></div>
      </div>
    </div>

  </div>

  <?php
// Footer
include_once "components/footer.php";
?>
