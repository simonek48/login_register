<!DOCTYPE html>

<?php
  require_once 'connect.php';
  
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $sql1 = " SELECT * FROM users where username = '$username'";
  $result = mysqli_query($conn, $sql1);
  mysqli_fetch_assoc($result);

  $sql2 = "INSERT INTO profileimg VALUES('NULL', '$username', 'default')";
  mysqli_query($conn, $sql2);

  if(mysqli_num_rows($result) == 1){
    echo "Username already taken";
  }
  else{ 
    $insert = "INSERT INTO users (username, email, password)
    values('$username', '$email', '$password')";
    $result = mysqli_query($conn, $insert); ?>  

    <html>
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <meta charset="utf-8">
      <title>Registered Page</title>
    </head>
    <body>
      <p>You are registered successfully</p>
      <form action = "../pages/list.php" method = "POST">
      <button type = "submit" class = "btn btn-outline-dark"> Go to main page </button>
    </body>
  </html>
    
<?php }
 ?>    
