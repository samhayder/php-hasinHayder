<?php
// session_name( "auth" );
session_start();
// session_destroy();


    if ( isset( $_POST["username"] ) && isset( $_POST["password"] ) ) {
        if ( "admin" == $_POST["username"] && "admin" == $_POST["password"] ) {
            $_SESSION['loggedin'] = true;
        } else {
            $_SESSION['loggedin'] = false;
        }
    }



if ( isset( $_POST['logout'] ) ) {
    $_SESSION['loggedin'] = false;
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="column column-60 column-offset-20">
        <h3>Simple Auth Project by PHP Session</h3>
      </div>
    </div>
    <!-- end of title -->

    <div class="row">
      <div class="column column-60 column-offset-20">
        <?php
if ( true == $_SESSION['loggedin'] ) {
    echo "Hello Admin, Welcome...";
} else {
    echo "Hello Stranger, Login Below";
}
?>

      </div>
    </div>
    <!-- end of Login Status -->

    <div class="row">
      <div class="column column-60 column-offset-20">
        <?php
			/* if ( $error ) {
				echo "<blockquote>Username and Password didn't match</blockquote>";
			} */
			if ( false == $_SESSION['loggedin'] ):
				?>
        <form method="POST">
          <label for=username>Username</label>
          <input type="text" name='username' id="username">
          <label for="password">Password</label>
          <input type="password" name="password" id="password">
          <button type="submit" class="button-primary" name="submit">Log
            In</button>
        </form>
        <?php
			else:
				?>
        <form action="" method="POST">
          <input type="hidden" name="logout" value="1">
          <button type="submit" class="button-primary" name="submit">Log
            Out</button>
        </form>
        <?php
			endif;
			?>
      </div>
    </div>
    <!-- end of form -->

  </div>

</body>

</html>
