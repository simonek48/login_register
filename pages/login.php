<!DOCTYPE html>

<html>
  <head>
  <?php include 'header.php';?>
  <link rel="stylesheet" href="../style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    
  <div class= "container">
    <div class = "row">
        <h2>Login</h2>
        <form action = "../scripts/login.php" method = "POST">
        <div class = "form-group">
          <label> Username</label>
          <input type = "text" name = "username" class = "form-control"> 
        <div class = "form-group">    
          <label> Password</label>
          <input type = "password" name = "password" class = "form-control"> 
          <button type = "submit" class = "btn btn-outline-light"> Login </button>
        </div>
      </form>
  </body>
</html>

