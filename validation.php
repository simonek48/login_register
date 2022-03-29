<!DOCTYPE html>

<?php
  include 'connect.php';

  if($username == $_POST['username'] && $email == $_POST['email'] && $password == $_POST['password']){?>
    <html>
    <head>
      <meta charset="utf-8">
      <title>main_page</title>
    </head>
    <body>
      <p>You are logged in successfully</p>
    </body>
  
  </html>
  
  <?php 
  }
   else{?>
    <h1>ERROR</h1>
  <?php 
  }
  ?>
    

