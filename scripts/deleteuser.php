<?php
include('connect.php');

$username = $_POST['username'];

$sql = "DELETE FROM users WHERE username ='$username'";
$query1 = mysqli_query($conn, $sql);


if ($query1){
    echo "DELETED SUCCESSFULLY";
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <form action = "../pages/list.php" method = "POST">
    <button type = "submit" class = "btn btn-outline-dark"> Go to main page </button>
<?php
}

else{
    echo "ERROR! " . $conn->error;
}
?>