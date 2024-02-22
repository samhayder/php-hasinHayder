<?php
// Includes Base URL
require_once "includes/config.php";
// Includes Database
require_once "includes/db.php";

// Header
include_once "components/header.php";
// Home Nav
include_once "components/nav.php";

$userId = $_SESSION['user']['id'] ?? 0;
?>

<main role="main" class="container py-5">
  <?php
//Show Success Message
successMsg();

if ( $userId > 0 ):

    // Connect Database
    $conn = db_connect();
    $contactSql = "SELECT * FROM `contacts` WHERE `owner_id` = $userId ORDER BY first_name ASC LIMIT 0,10";
    $sqlResult = mysqli_query( $conn, $contactSql );
    $contactNumRows = mysqli_num_rows( $sqlResult );

    if ( $contactNumRows > 0 ):

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

	      <?php
    while ( $row = mysqli_fetch_assoc( $sqlResult ) ) {

        $userImage = BASEURL . "uploads/photos/" . $row['photo'] ?? "https://via.placeholder.com/50.png/09f/666";
        ?>

	      <tr>
	        <td class="align-middle">
	          <img src="<?php echo $userImage; ?>" class="img-thumbnail img-list"
	            style="width: 50px;" />
	        </td>
	        <td class="align-middle">
	          <?php echo ucfirst( $row['first_name'] ) . " " . ucfirst( $row['last_name'] ); ?>
	        </td>
	        <td class="align-middle">
	          <a href="<?php echo BASEURL; ?>view.php?id=9"
	            class="btn btn-success">View</a>
	          <a href="<?php echo BASEURL; ?>add-contact.php?id=9"
	            class="btn btn-primary">Edit</a>
	          <a href="<?php echo BASEURL; ?>delete.php?id=9" class="btn btn-danger"
	            onclick="return confirm(`Are you sure want to delete this contact?`)">Delete</a>
	        </td>
	      </tr>
	      <?php }?>
	    </tbody>
	  </table>

	  <nav>
	    <ul class="pagination justify-content-center">
	      <li class="page-item  disabled">
	        <a class="page-link"
	          href="<?php echo BASEURL; ?>index.php?page=0">Previous</a>
	      </li>
	      <li class="page-item active"><a class="page-link"
	          href="<?php echo BASEURL; ?>index.php?page=1">1</a></li>
	      <li class="page-item"><a class="page-link"
	          href="<?php echo BASEURL; ?>index.php?page=2">2</a></li>

	      <li class="page-item">
	        <a class="page-link"
	          href="<?php echo BASEURL; ?>index.php?page=2">Next</a>
	      </li>
	    </ul>
	  </nav>
	  <?php endif;?>

  <?php
endif;
// Footer
include_once "components/footer.php";
?>
