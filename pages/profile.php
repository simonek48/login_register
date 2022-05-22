<!DOCTYPE html>

<html>
  <head>
    <style>

  .container {
    display: flex;
    justify-content: center;
  } 
  .row {
    background-color: black;
    display: inline-block;
    position: absolute;   
    top: 50%;
    transform: translate(0, -50%);
    border: 1px solid white;
    padding: 10px;
    text-align: center;
  }
  body {
    background: url('../background.jpeg');
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
  .avatar {
    margin: 10px;
    float: left;
  }

    </style>
    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>
  <?php 
    
    include 'header.php';
    require_once '../scripts/connect.php';
    

    $username = $_POST['username'];
    $email = $_POST['email'];
    $img = '../defaultuserimage.png';
    $mydir = '../uploads/'; 
  
    if(isset($_POST['filename'])){
      $target_file = $_POST['filename'];
      $sql = "UPDATE profileimg SET imagelocation = '$target_file', status = 'notdefault' WHERE username = '$username'";
      mysqli_query($conn, $sql);
    }
    ?>
  <div class= "container">
    <div class = "row">
        <h2>Profile</h2><br>
        <?php
          $imglocation = mysqli_fetch_assoc(mysqli_query($conn, "SELECT imagelocation FROM profileimg WHERE username = '$username'"));
          $default = mysqli_fetch_assoc(mysqli_query($conn, "SELECT status FROM profileimg WHERE username = '$username'"));
          if($default['status'] == 'default'){
          }
          else {
            $img = $imglocation['imagelocation'];
          }
        ?>
        <img src = <?php echo $img?>>
        <div class = "form-group"> 
          <form action = "../scripts/imageupload.php" method = "POST" enctype = "multipart/form-data">
            <input type = "file" name = "fileToUpload" id="fileToUpload"><br>
            <input type="hidden" name="username" value="<?php echo $username ?>">
            <input type="hidden" name="email" value="<?php echo $email ?>">
            <button type = "submit" class = "btn btn-outline-primary"> Zmena avatara </button>
          </form>
        <p> Uživateľské meno: <?php echo $username;?> </p><br>
        <p> Email: <?php echo $email?></p><br>
        <div class = "form-group"> 
          <form action = "../pages/passwordchange.php" method = "POST">
            <input type="hidden" name="username" value="<?php echo $username ?>">
            <button type = "submit" class = "btn btn-outline-primary"> Zmena hesla </button>
          </form>
        <div class = "form-group"> 
          <form action = "../scripts/deleteuser.php" method = "POST">
            <input type="hidden" name="username" value="<?php echo $username ?>">
            <button type = "submit" class = "btn btn-outline-danger"> Zmazanie uctu </button>
          </form>
      </div>
  </body>
</html>