
<!DOCTYPE html>

<html>
  <head>
    <?php include 'header.php';?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Registration</title>
    <style> 
    h2  {
      margin-top: 10px;
      margin-bottom: 10px;
    }
    .form-group button {
      margin-top: 20px;
    }
    </style>
  </head>
  <body>
    <include src="header.html"></include>
    <div class= "container">
      <div class = "row">
      <div class = "col-md-6">
        <h2>Register</h2>
        <form action = "registered.php" method = "POST">
        <div class = "form-group">
          <label> Username</label>
          <input type = "text" name = "username" class = "form-control"> 
        <div class = "form-group">    
          <label> Email</label>
          <input type = "text" name = "email" class = "form-control"> 
        <div class = "form-group">    
          <label> Password</label>
          <input type = "text" name = "password" class = "form-control"> 
        <button type = "submit" class = "btn btn-outline-dark"> Register </button>
      </div>
      </div>
    </form>
  </body>
</html>