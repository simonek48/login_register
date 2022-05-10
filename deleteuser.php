<?php
include('connect.php');

$query1 = mysqli_query($conn, "SELECT * FROM users");
while($row = mysqli_fetch_array($query1))
{
    $sql = 'DELETE FROM users WHERE id =' . $row['id'];
    $result = $conn->query($sql);
    $user = null;
}
if ($conn->query($sql) === TRUE){
    echo "DELETED SUCCESSFULLY";
}

else{
    echo "ERROR!" . $conn->error;
}
?>