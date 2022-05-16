<!DOCTYPE html>

<html>
  <head>
    <style>

  .container {
    display: flex;
    justify-content: center;
  } 
  body {
    background: url('background.jpeg');
    background-size: cover;
  }
  h2{
    color: white;
  }
  p {
    color: white;
  }
  .form-group button {
    margin-top: 20px;
    margin-bottom: 20px;
  } 
  img {
    object-fit:scale-down;
    width: 130px;
    height: 130px; 
  }
  
    </style>
    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>
  <?php 
    
    include 'header.php';
    require_once 'connect.php';

    $query1 = mysqli_query($conn, "SELECT * FROM users");
    $row = mysqli_fetch_array($query1);

    $sql = 'SELECT * FROM users WHERE id =' . $row['id'];
    $result = $conn->query($sql);
    
    ?>
  <div class= "container">
    <div class = "row">
        <h2>Profile</h2><br>
        <img src = "defaultuserimage.png">
        <div class = "form-group"> 
          <form action = "avatarchange.php" method = "POST">
          <button type = "submit" class = "btn btn-outline-primary"> Zmena avatara </button>
          </form>
        <p> Meno: <?php echo $row['username'];?> </p><br>
        <p> Email: <?php echo $row['email'];?></p><br>
        <div class = "form-group"> 
          <form action = "passwordchange.php" method = "POST">
          <button type = "submit" class = "btn btn-outline-primary"> Zmena hesla </button>
          </form>
        <div class = "form-group"> 
          <form action = "deleteuser.php" method = "POST">
          <button type = "submit" class = "btn btn-outline-danger"> Zmazanie uctu </button>
          </form>
      </div>
  </body>

</html>