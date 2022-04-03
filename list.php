<!DOCTYPE html>

<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>registration</title>
  </head>
  <body>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
      </tr>
    </thead>
    <?php
      include 'connect.php';

      $query1 = mysqli_query($conn, "SELECT * FROM users");
      while($row = mysqli_fetch_array($query1))
      {
      ?>
    <tbody>
      <tr>
          <td><?php echo $row['id'];?></td>
          <td><?php echo $row['username'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['password'];?></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
  </body>
</html>

