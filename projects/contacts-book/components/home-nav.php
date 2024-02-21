<?php
// Base Url
require_once "includes/config.php";

$user = $_SESSION['user'] ? $_SESSION['user'] : [];
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="<?php echo BASEURL; ?>"><i
        class="fa fa-address-book"></i> ContactBook</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
      data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item  active">
          <a class="nav-link" href="<?php echo BASEURL; ?>">Home <span
              class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASEURL; ?>add-contact.php">Add
            Contact</a>
        </li>

        <!-- check user login -->
        <?php if ( !empty( $user ) ): ?>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle"
            href="<?php echo BASEURL; ?>profile.php" id="navbarDropdownMenuLink"
            role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <?php
echo !empty( $user['first_name'] ) ? ucfirst( $user['first_name'] ) : "Guest";
?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item"
              href="<?php echo BASEURL; ?>profile.php">Profile</a>
            <a class="dropdown-item"
              href="<?php echo BASEURL; ?>logout.php">Logout</a>
          </div>
        </li>
        <?php endif;?>
      </ul>
    </div>
  </div>
</nav>
