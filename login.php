<!DOCTYPE html>

<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>gym login</title>
  </head>
  <body>
    
  <div class= "container">
    <div class = "row">
    <div class = "col-md-6">
        <h2>Login</h2>
        <form action = "validation.php" method = "POST">
        <div class = "form-group">
          <label> Username</label>
          <input type = "text" name = "username" class = "form-control"> 
        <div class = "form-group">    
          <label> Email</label>
          <input type = "text" name = "email" class = "form-control"> 
        <div class = "form-group">    
          <label> Password</label>
          <input type = "text" name = "password" class = "form-control"> 
        <button type = "submit" class = "btn btn-primary"> Login </button>
      </div>
      </div>
      </form>
  </body>

</html>