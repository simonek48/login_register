<!DOCTYPE html>

<html>
  <head>
  <?php include 'header.php';?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>registration</title>
    <style>
      body{
        background: url(../background.jpeg);
      }
      th {
        color: white;
      }
      td {
        color: white;
      }
      button {
        background-color: black;
        color: white;
      }
      img {
        height: 20px;
        width: 20px;
      }
      </style>
    </head>
  <body>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Avatar</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
      </tr>
    </thead>
    <?php
      include '../scripts/connect.php';

      $query1 = mysqli_query($conn, "SELECT * FROM users");
      while($row = mysqli_fetch_assoc($query1)){
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['password'];
      ?>
    <tbody>
      <tr>
          <td><img src = "../defaultuserimage.png"></td>
          <td>
            <form action = "profile.php" method = "POST">
              <input type="hidden" name="username" value="<?php echo $username ?>">
              <input type="hidden" name="email" value="<?php echo $email ?>">
              <button type = submit><?php echo $username;?></button>
            </form>
          </td>
          <td><?php echo $email;?></td>
          <td><?php echo $password;?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
  </body>
</html>

