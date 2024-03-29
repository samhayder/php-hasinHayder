<?php
// Base Url
require_once "includes/config.php";

$user = $_SESSION['user'] ?? [];
$currentPage = $_SERVER['REQUEST_URI'] ?? '';
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
        <li
          class="nav-item  <?php if ( $currentPage == BASEURL ): echo "active";endif;?>">
          <a class="nav-link" href="<?php echo BASEURL; ?>">Home <span
              class="sr-only">(current)</span></a>
        </li>

        <!-- user not login-> show this li -->
        <?php if ( empty( $user ) ): ?>
        <li
          class="nav-item <?php if ( $currentPage == BASEURL . "signup.php" ): echo "active";endif;?>">
          <a class="nav-link"
            href="<?php echo BASEURL . "signup.php"; ?>">Signup</a>
        </li>
        <li
          class="nav-item <?php if ( $currentPage == BASEURL . "login.php" ): echo "active";endif;?>">
          <a class="nav-link"
            href="<?php echo BASEURL . "login.php"; ?>">Login</a>
        </li>
        <?php endif;?>

        <!-- check user login -> show this li -->
        <?php if ( !empty( $user ) ): ?>
        <li
          class="nav-item <?php if ( $currentPage == BASEURL . "add-contact.php" ): echo "active";endif;?>">
          <a class="nav-link"
            href="<?php echo BASEURL . "add-contact.php"; ?>">Add
            Contact</a>
        </li>
        <li
          class="nav-item dropdown <?php if ( $currentPage == BASEURL . "profile.php" || $currentPage == BASEURL . "edit-profile.php" || $currentPage == BASEURL . "change-password.php" ): echo "active";endif;?>">
          <a class="nav-link dropdown-toggle"
            href="<?php echo BASEURL . "profile.php"; ?>"
            id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <?php
echo !empty( $user['first_name'] ) ? ucfirst( $user['first_name'] ) : "Guest";
?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item"
              href="<?php echo BASEURL . "profile.php"; ?>">Profile</a>
            <a class="dropdown-item"
              href="<?php echo BASEURL . "edit-profile.php"; ?>">Edit
              Profile</a>
            <a class="dropdown-item"
              href="<?php echo BASEURL . "change-password.php"; ?>">Change
              Password</a>
            <a class="dropdown-item"
              href="<?php echo BASEURL . "logout.php"; ?>">Logout</a>
          </div>
        </li>
        <?php endif;?>
      </ul>
    </div>
  </div>
</nav>
