<!DOCTYPE html>

<?php
  require_once 'connect.php';
  
  $uname = $_POST['username'];
  $oldpassword = $_POST['oldpassword'];
  $newpassword = $_POST['newpassword'];
  $sql = "SELECT * FROM users";
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($query);

  if($query && $oldpassword == $row['password']){
    $s = "UPDATE users SET password = '$newpassword' WHERE username ='$uname'";
    mysqli_query($conn, $s);
?>
    <html>
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <meta charset="utf-8">
      <title>Password changed</title>
    </head>
    <body>
      <p>You have successfully changed your password.</p>
      <form action = "../pages/list.php" method = "POST">
      <button type = "submit" class = "btn btn-outline-dark"> Go to main page </button>
    </body>
  </html>
  <?php }

  else{ 
    echo "ERROR.". $conn->error;
    }
?>