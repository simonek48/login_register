<!DOCTYPE html>

<?php
  include 'connect.php';
  $user_id = "SELECT COUNT(*) FROM users;";
  $count = mysqli_query($conn, $user_id);
  $row = mysqli_fetch_assoc($count);
  $uid = implode($row) + 1;

 
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  
  $s = " SELECT * FROM users where username = '$username'";
  $result = mysqli_query($conn, $s);
  $num = mysqli_num_rows($result);

  if($num == 1){
    echo "Username already taken";
  }
  else{ 
    $insert = "INSERT INTO users(id, username, email, password)
    values('$uid', '$username', '$email', '$password')";
    $result= mysqli_query($conn, $insert); ?>  

    <html>
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <meta charset="utf-8">
      <title>Registered Page</title>
    </head>
    <body>
      <p>You are registered successfully</p>
      <form action = "main.php" method = "POST">
      <button type = "submit" class = "btn btn-primary"> Go to main page </button>
    </body>
  </html>
    
<?php }
 ?>    
