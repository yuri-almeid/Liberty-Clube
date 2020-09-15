<?php 

include_once "db.php";

$fm_user = mysqli_real_escape_string($db_connection, $_POST["username"]);
$fm_email = mysqli_real_escape_string($db_connection, $_POST["email"]);
$fm_pass = mysqli_real_escape_string($db_connection, $_POST["password"]);

$sql = "insert into users (username, email, password) values ( '$fm_user', '$fm_email', '$fm_pass' )";
  
mysqli_query($db_connection, $sql);

header("Location: ../../index.html?submit=sucess");
