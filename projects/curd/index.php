<?php
require_once "inc/functions.php";

$task = $_GET['task'] ?? "report";
$error = $_GET['error'] ?? 0;

$info = "";
$fname = "";
$lname = "";
$roll = "";

// Seed
if ( "seed" == $task ) {
    seed();
    $info = "Seeding is Complete";
}

// Remove Task
if ( "delete" == $task ) {
    $id = filter_input( INPUT_GET, 'id', FILTER_SANITIZE_FULL_SPECIAL_CHARS );

    if ( $id > 0 ) {
        removeStudent( $id );
        header('location:/?task=report');
    }
}

// Add new Students
if ( isset( $_POST['submit'] ) ) {
    $fname = filter_input( INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
    $lname = filter_input( INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
    $roll = filter_input( INPUT_POST, 'roll', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
    $id = filter_input( INPUT_POST, 'id', FILTER_SANITIZE_FULL_SPECIAL_CHARS );

    if ( $id ) {
        if ( $fname != "" && $lname != "" && $roll != "" ) {
            $result = updateStudent( $id, $fname, $lname, $roll );

            if ( $result ) {
                header( 'location:/?task=report' );
            } else {
                $error = 1;
            }
        }
    } else {
        if ( $fname != "" && $lname != "" && $roll != "" ) {
            $result = addStudent( $fname, $lname, $roll );

            if ( $result ) {
                header( 'location:/?task=report' );
            } else {
                $error = 1;
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Form Example</title>
   <link rel="stylesheet"
      href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
   <link rel="stylesheet"
      href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
   <link rel="stylesheet"
      href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
   <style>
   body {
      margin-top: 30px;
   }

   </style>
</head>

<body>
   <div class="container">
      <div class="row">
         <div class="column column-60 column-offset-20">
            <h2>Project 2 - CRUD</h2>
            <p>A sample project to perform CRUD operations using plain files
               and
               PHP</p>                       <?php include_once "inc/templates/nav.php";?>
            <hr>
            <?php
if ( $info != "" ) {
    echo "<p>{$info}</p>";
}
?>
         </div>
      </div>
      <!-- end of title row -->

      <!-- Start Report  -->
      <?php if ( 'report' == $task ): ?>
      <div class="row">
         <div class="column column-60 column-offset-20">
            <?php generateReport();?>
         </div>
      </div>
      <?php endif;?>
      <!-- End of Report -->

      <!-- Start Show Error Message -->
      <?php
if ( 1 == $error ) {
    $html = <<< END
      <div class="row">
         <div class="column column-60 column-offset-20">
            <blockquote>{$roll} Roll is already exit.</blockquote>
         </div>
      </div>
END;
    print $html;
}
?>
      <!-- End of Show Error Message -->

      <!-- Start Add new task -->
      <?php if ( 'add' == $task ): ?>
         <div class="row">
         <div class="column column-60 column-offset-20">
            <form action="/?task=add" method="post">
               <label for="fname">First Name</label>
               <input type="text" name="fname" id="fname"
                  value="<?php echo $fname; ?>">
               <label for="lname">Last Name</label>
               <input type="text" name="lname" id="lname"
                  value="<?php echo $lname; ?>">
               <label for="roll">Roll </label>
               <input type="number" name="roll" id="roll"
                  value="<?php echo $roll; ?>">
               <button type="submit" name="submit">Save</button>
            </form>
         </div>
      </div>
      <?php endif;?>
      <!-- End Add new task -->

      <!-- Start Edit task -->
      <?php if ( 'edit' == $task ):
    $id = filter_input( INPUT_GET, 'id', FILTER_SANITIZE_FULL_SPECIAL_CHARS );

    //Get student data
    $student = getStudent( $id );
    if ( $student ): ?>
      <div class="row">
         <div class="column column-60 column-offset-20">
            <form  method="post">
               <input type="hidden" value="<?php echo $id; ?>" name="id">
               <label for="fname">First Name</label>
               <input type="text" name="fname" id="fname"
                  value="<?php echo $student['fname']; ?>">
               <label for="lname">Last Name</label>
               <input type="text" name="lname" id="lname"
                  value="<?php echo $student['lname']; ?>">
               <label for="roll">Roll </label>
               <input type="number" name="roll" id="roll"
                  value="<?php echo $student['roll']; ?>">
               <button type="submit" name="submit">Update</button>
            </form>
         </div>
      </div>
		<?php
endif;
endif;?>
      <!-- End of Edit task -->
   </div>

   <script src="./assets/js/script.js"></script>
</body>

</html>
