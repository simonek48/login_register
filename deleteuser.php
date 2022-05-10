<?php
include('connect.php');

$sql = 'DELETE FROM users WHERE id =' . $_GET['id'];
$result = $conn->query($sql);
$user = null;

if ($conn->query($sql) === TRUE){
    echo "DELETED SUCCESSFULLY";
}

else{
    echo "ERROR!" . $conn->error;
}
?>