<?php
// Include Base URL
require_once "includes/config.php";
// Header
include_once "components/header.php";
// Login Nav
include_once "components/login-nav.php";
?>

<main role="main" class="container">
  <div class="row justify-content-center wrapper">
    <div class="col-md-6">
      <div class="card">
        <header class="card-header">
          <h4 class="card-title mt-2">Profile</h4>
        </header>
        <article class="card-body">
          <div class="container" id="profile">
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <img src="http://placehold.it/100x100" alt=""
                  class="rounded-circle" />
              </div>
              <div class="col-sm-6 col-md-8">
                <h4 class="text-primary">Pankaj Kumar</h4>
                <p class="text-secondary">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                  pankaj@gmail.com <br />
                </p>
                <!-- Split button -->
              </div>
            </div>

          </div>
        </article>

      </div>
    </div>

  </div> <!-- row.//-->

  <?php
// Footer
include_once "components/footer.php";
