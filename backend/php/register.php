<?php 

include_once "db.php";

$errors = array();

$fm_name = mysqli_real_escape_string($db_connection, $_POST["name"]);
$fm_email = mysqli_real_escape_string($db_connection, $_POST["email"]);
$fm_pass1 = mysqli_real_escape_string($db_connection, $_POST["password"]);
$fm_pass2 = mysqli_real_escape_string($db_connection, $_POST["password_confirmation"]);




$fm_pass = md5($fm_pass);

if (empty($fm_email)) { array_push($errors, "falta o email"); }

if (count($errors) == 0){
  $sql = "insert into users ( name, email , password) values ( '$fm_name', '$fm_email', '$fm_pass' )";
  mysqli_query($db_connection, $sql);
  header("Location: ../../index.html?submit=sucess");
}



