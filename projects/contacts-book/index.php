<?php
include_once "components/header.php";
require_once "includes/config.php";

?>



<table class="table text-center">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="align-middle"><img
          src="https://via.placeholder.com/50.png/09f/666"
          class="img-thumbnail img-list" /></td>
      <td class="align-middle">Deepak Sharma</td>
      <td class="align-middle">
        <a href="<?php echo BASEURL; ?>view.php?id=9"
          class="btn btn-success">View</a>
        <a href="<?php echo BASEURL; ?>addcontact.php?id=9"
          class="btn btn-primary">Edit</a>
        <a href="<?php echo BASEURL; ?>delete.php?id=9" class="btn btn-danger"
          onclick="return confirm(`Are you sure want to delete this contact?`)">Delete</a>
      </td>
    </tr>
    <tr>
      <td class="align-middle"><img
          src="<?php echo BASEURL; ?>uploads/photos/2f053caaa84024ec6d12aaa5679b5417.jpg"
          class="img-thumbnail img-list" /></td>
      <td class="align-middle">Harish Rawat</td>
      <td class="align-middle">
        <a href="<?php echo BASEURL; ?>view.php?id=3"
          class="btn btn-success">View</a>
        <a href="<?php echo BASEURL; ?>addcontact.php?id=3"
          class="btn btn-primary">Edit</a>
        <a href="<?php echo BASEURL; ?>delete.php?id=3" class="btn btn-danger"
          onclick="return confirm(`Are you sure want to delete this contact?`)">Delete</a>
      </td>
    </tr>
    <tr>
      <td class="align-middle"><img
          src="https://via.placeholder.com/50.png/09f/666"
          class="img-thumbnail img-list" /></td>
      <td class="align-middle">john smith</td>
      <td class="align-middle">
        <a href="<?php echo BASEURL; ?>view.php?id=1"
          class="btn btn-success">View</a>
        <a href="<?php echo BASEURL; ?>addcontact.php?id=1"
          class="btn btn-primary">Edit</a>
        <a href="<?php echo BASEURL; ?>delete.php?id=1" class="btn btn-danger"
          onclick="return confirm(`Are you sure want to delete this contact?`)">Delete</a>
      </td>
    </tr>
    <tr>
      <td class="align-middle"><img
          src="<?php echo BASEURL; ?>uploads/photos/c266048c47fa99a363727728897ead4c.jpg"
          class="img-thumbnail img-list" /></td>
      <td class="align-middle">MS2 Dhoni</td>
      <td class="align-middle">
        <a href="<?php echo BASEURL; ?>view.php?id=8"
          class="btn btn-success">View</a>
        <a href="<?php echo BASEURL; ?>addcontact.php?id=8"
          class="btn btn-primary">Edit</a>
        <a href="<?php echo BASEURL; ?>delete.php?id=8" class="btn btn-danger"
          onclick="return confirm(`Are you sure want to delete this contact?`)">Delete</a>
      </td>
    </tr>
    <tr>
      <td class="align-middle"><img
          src="https://via.placeholder.com/50.png/09f/666"
          class="img-thumbnail img-list" /></td>
      <td class="align-middle">pawan singh</td>
      <td class="align-middle">
        <a href="<?php echo BASEURL; ?>view.php?id=2"
          class="btn btn-success">View</a>
        <a href="<?php echo BASEURL; ?>addcontact.php?id=2"
          class="btn btn-primary">Edit</a>
        <a href="<?php echo BASEURL; ?>delete.php?id=2" class="btn btn-danger"
          onclick="return confirm(`Are you sure want to delete this contact?`)">Delete</a>
      </td>
    </tr>
  </tbody>
</table>

<?php include_once "components/nav.php";?>

<?php include_once "components/footer.php";?>
