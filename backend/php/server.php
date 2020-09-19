<?php

include_once 'db.php';

$username = "";
$email    = "";
$errors = array(); 

if (isset($_POST['form_register'])){

  $fm_name = mysqli_real_escape_string($db_connection, $_POST["name"]);
  $fm_email = mysqli_real_escape_string($db_connection, $_POST["email"]);
  $fm_pass1 = mysqli_real_escape_string($db_connection, $_POST["password"]);
  $fm_pass2 = mysqli_real_escape_string($db_connection, $_POST["password_confirmation"]);


  // $fm_pass = md5($fm_pass1);
  if (empty($fm_name)) { array_push($errors, "*Campo do nome está vazio!"); }
  if (empty($fm_email)) { array_push($errors, "*Campo do e-mail está vazio!"); }
  if (empty($fm_pass1)) { array_push($errors, "*Campo da senha está vazio!"); }

  if (count($errors) > 0){
    // header("Location: sign.php#register");
  }

  if (count($errors) == 0){
    $sql = "insert into users ( name, email , password) values ( '$fm_name', '$fm_email', '$fm_pass' )";
    mysqli_query($db_connection, $sql);
    header("Location: ../../index.html?submit=sucess");
  }
}

if (isset($_POST['form_login'])){

}