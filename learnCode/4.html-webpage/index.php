<?php
include_once "function.php";

$fName = " ";
$lName = " ";
$checkedBox = "";

if ( isset( $_GET['fname'] ) && !empty( $_GET['fname'] ) ) {
    //  $fName = $_GET['fname'];
    //  $fName = htmlspecialchars( $_GET['fname'] );
    $fName = filter_input( INPUT_GET, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
}

if ( isset( $_GET['lname'] ) && !empty( $_GET['lname'] ) ) {
    $lName = filter_input( INPUT_GET, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
}

if ( isset( $_GET['cb1'] ) && $_GET['cb1'] == 1 ) {
    $checkedBox = 'checked';
}

// Input Options
$colors = ["red", "green", "black", "white", "orange"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <title>PHP | Form</title>
</head>
<body>

<div class="container">
   <div class="heading">
      <h1>PHP Form Handling With PHP</h1>
   </div>

   <form action="index.php" method="GET">
      <div class="form_group">
         <label for="fname">First Name</label>
         <input type="text" name="fname" id="fname">
      </div>
      <br>
      <div class="form_group">
         <label for="lname">Last Name</label>
         <input type="text" name="lname" id="lname">
      </div>
      <br>

      <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checkedBox ?>>
      <label for="cb1">Confirm to agreement</label>
      <br>
      <br>

      <div>
         <p>check your favorite fruits</p>

         <input type="checkbox" name="fruits[]" id="apple" value="Apple" <?php isChecked( 'fruits', 'Apple' )?>>
         <label for="apple">Apple</label> <br>

         <input type="checkbox" name="fruits[]" id="banana" value="banana" <?php isChecked( 'fruits', 'banana' )?>>
         <label for="banana">banana</label> <br>

         <input type="checkbox" name="fruits[]" id="orang" value="orang" <?php isChecked( 'fruits', 'orang' )?>>
         <label for="orang">orang</label> <br>

         <input type="checkbox" name="fruits[]" id="lemon" value="lemon" <?php isChecked( 'fruits', 'lemon' )?>>
         <label for="lemon">lemon</label> <br>

         <input type="checkbox" name="fruits[]" id="dragoon" value="dragoon" <?php isChecked( 'fruits', 'dragoon' )?>>
         <label for="dragoon">dragoon</label> <br>

      </div>

      <br>

      <select style="height: 120px;" name="colors[]" id="colors" multiple>
         <option value="" disabled selected>Chose your favorite color</option>

         <?php inputOption( $colors );?>
      </select>

      <br>
      <br>

      <button type="submit" name="submit">Submit</button>
   </form>
   <br>


   <p>First Name: <?php echo $fName ?> </p>
   <p>Last Name: <?php echo $lName ?> </p>

   <p>Select Colors:
      <?php
$_colors = filter_input( INPUT_GET, 'colors', FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY );

$colorLength = count( $_colors );

if ( $colorLength > 0 ) {
    echo join( ",", $_colors );
}
?>
   </p>
</div>



</body>
</html>
