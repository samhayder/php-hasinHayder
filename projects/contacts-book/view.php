<?php 
 // Include Base URL
 require_once "includes/config.php";
 // Header
 include_once "components/header.php";
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="<?php echo BASEURL;?>"><i
        class="fa fa-address-book"></i> ContactBook</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
      data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo BASEURL;?>">Home <span
              class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASEURL;?>addcontact.php">Add
            Contact</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle"
            href="<?php echo BASEURL;?>profile.php" id="navbarDropdownMenuLink"
            role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Pankaj </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item"
              href="<?php echo BASEURL;?>profile.php">Profile</a>
            <a class="dropdown-item"
              href="<?php echo BASEURL;?>logout.php">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
< role="main" class="container">
  <div class="row justify-content-center wrapper">
    <div class="col-md-6">
      <div class="card">
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
                <h4 class="text-primary">Deepak Sharma</h4>
                <p class="text-secondary">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                  deepak@gmail.com<br />
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  9776655444<br />
                  <i class="fa fa-map-marker" aria-hidden="true"></i> Delhi
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
