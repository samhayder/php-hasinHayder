<?php
session_name( "curd_student" );
session_start( [
    "cookie_domain" => ".st.com",
    "cookie_path"   => "/",
] );

// Sanitize login Input field
$username = filter_input( INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$password = filter_input( INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS );

$fp = fopen( "data/user.txt", "r" );

$error = false;

if ( $username && $password ) {
    $_SESSION['login'] = false;
    $_SESSION['user'] = false;

    while ( $data = fgetcsv( $fp ) ) {
        if ( $data[0] == $username && $data[1] == sha1( $password ) ) {
            if ( isset( $_SESSION['login'] ) ) {
                $_SESSION['login'] = true;
                $_SESSION['user'] = $username;
                header( 'location:index.php' );
            }
        }
    }

    if ( !$_SESSION['login'] ) {
        $error = true;
    }
}

if ( isset( $_GET['logout'] ) || isset( $_POST['logoutSubmit'] ) ) {
    $_SESSION['login'] = false;
    $_SESSION['user'] = false;
    session_destroy();
    header( 'location:index.php' );
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In | Form</title>

  <link rel="stylesheet"
    href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
  <link rel="stylesheet"
    href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
  <link rel="stylesheet"
    href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
</head>

<body>

  <div class="container" style="margin-top:100px">
    <div class="row">
      <div class="column column-60 column-offset-20">
        <h2>Login Form by Student CURD Project</h2>
        <p>Hello Stranger, Login Below </p>
      </div>
    </div>

    <!-- Login form  -->
    <div class="row">
      <div class="column column-60 column-offset-20">
        <?php
if ( $error ):
    echo "<blockquote>{$username} & {$password} didn't match</blockquote>";
endif;

if ( !$_SESSION['login'] ): ?>
        <form method="POST">
          <label for="username">Username:</label>
          <input type="text" name="username">

          <label for="password">Password:</label>
          <input type="text" name="password">

          <button type="submit" name="submit" class="button-primary">Log
            In</button>
        </form>
        <?php else: ?>
        <!-- log out form -->
        <form action="auth.php" method="POST">
          <input type="hidden" name="logout" value="1">
          <button type="submit" name="logoutSubmit" class="button-primary">Log
            Out</button>
        </form>
        <?php endif;?>
      </div>
    </div>
  </div>

</body>

</html>
