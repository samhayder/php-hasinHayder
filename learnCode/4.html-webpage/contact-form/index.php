<?php
require_once "contactForm.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Form | PHP</title>

   <link rel="stylesheet" href="style.css">
</head>

<body>
   <div class="main">
      <div class="container">
         <h2>Contact Form | PHP</h2>

         <form method="post">
            <div class="form-group">
               <input type="text" name="name" id="name" placeholder="Type your Full Name">
            </div>

            <div class="form-group">
               <input type="email" name="email" id="email" placeholder="Your e-mail">
            </div>

            <div class="form-group">
               <input type="password" name="password" id="password" placeholder="Your Password">
            </div>

            <div class="form-group">
               <input type="text" name="website" id="website" placeholder="Your website address">
            </div>

            <div class="form-group">
               <textarea name="message" id="messages" placeholder="Type Message"></textarea>
            </div>

            <div class="form-group">
               <input type="checkbox" name="remember" id="remember">
               <label for="remember">Remember Me!</label>
            </div>

            <div class="btn-center">
               <button type="submit" name="submit" id="submit">SEND MAIL...</button>
            </div>
         </form>

         <br>
         <br>

         <div class="received_data">
            <h4><?php echo "Name: $name" ?></h4>
            <h4><?php echo "Email: $emailForm" ?></h4>
            <h4><?php echo "Password: $password" ?></h4>
            <h4><?php echo "Website: $website" ?></h4>
            <h4><?php echo "Message: $message" ?></h4>
         </div>
      </div>
   </div>

</body>

</html>