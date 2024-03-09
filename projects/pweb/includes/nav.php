<?php
// Config BASE URL
require_once "config/config.php";
?>

<nav class="navbar navbar-expand-md  navbar-light bg-light">
  <div class="container">


    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active"
            href="<?php echo URL . 'index.php' ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Business</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"
            href="<?php echo URL . 'category.php';?>" id="dropdown04"
            data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Travel</a>
          <div class="dropdown-menu" aria-labelledby="dropdown04">
            <a class="dropdown-item"
              href="<?php echo URL . 'category.php';?>">Asia</a>
            <a class="dropdown-item"
              href="<?php echo URL . 'category.php';?>">Europe</a>
            <a class="dropdown-item"
              href="<?php echo URL . 'category.php';?>">Dubai</a>
            <a class="dropdown-item"
              href="<?php echo URL . 'category.php';?>">Africa</a>
            <a class="dropdown-item"
              href="<?php echo URL . 'category.php';?>">South
              America</a>
          </div>

        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"
            href="<?php echo URL . 'category.php';?>" id="dropdown05"
            data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Categories</a>
          <div class="dropdown-menu" aria-labelledby="dropdown05">
            <a class="dropdown-item"
              href="<?php echo URL . 'category.php';?>">Lifestyle</a>
            <a class="dropdown-item"
              href="<?php echo URL . 'category.php';?>">Food</a>
            <a class="dropdown-item"
              href="<?php echo URL . 'category.php';?>">Adventure</a>
            <a class="dropdown-item"
              href="<?php echo URL . 'category.php';?>">Travel</a>
            <a class="dropdown-item"
              href="<?php echo URL . 'category.php';?>">Business</a>
          </div>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL . 'about.php';?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"
            href="<?php echo URL . 'contact.php';?>">Contact</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
