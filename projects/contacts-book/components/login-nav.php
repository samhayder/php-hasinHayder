<?php 
 // Include Base URL
require_once "includes/config.php";
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
        <li class="nav-item  active">
          <a class="nav-link" href="<?php echo BASEURL;?>">Home <span
              class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASEURL;?>signup.php">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASEURL;?>login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
