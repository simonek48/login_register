<?php
include('connect.php');

$query1 = mysqli_query($conn, "SELECT * FROM users");
$row = mysqli_fetch_array($query1);
$sql = 'DELETE FROM users WHERE id =' . $row['id'];
$result = $conn->query($sql);
$user = null;

if ($conn->query($sql) === TRUE){
    echo "DELETED SUCCESSFULLY";
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <form action = "list.php" method = "POST">
    <button type = "submit" class = "btn btn-outline-dark"> Go to main page </button>
<?php
}

else{
    echo "ERROR!" . $conn->error;
}
?>