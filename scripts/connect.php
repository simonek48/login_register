<?php

$conn = mysqli_connect('localhost','root', '', 'loginandregister');

if(!$conn){
  echo 'Connection error: ' . mysqli_connect_error();
}

?>