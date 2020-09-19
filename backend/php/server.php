<?php

// Inclui a função que faz a conexão com o banco de dados
include_once 'db.php';

// Declara variáveis
$username = "";
$email    = "";
$errors = array(); 

// Para o registro
if (isset($_POST['form_register'])){
  // Cria as variáveis presentes no formulário enviado pelo metodo POST
  // através do sign.php
  $fm_name = mysqli_real_escape_string($db_connection, $_POST["name"]);
  $fm_email = mysqli_real_escape_string($db_connection, $_POST["email"]);
  $fm_pass1 = mysqli_real_escape_string($db_connection, $_POST["password"]);
  $fm_pass2 = mysqli_real_escape_string($db_connection, $_POST["password_confirmation"]);

  // Verificação de erros:
    // Erros de ausencia de dados
  if (empty($fm_name)) { array_push($errors, "*Campo do nome está vazio!"); }
  if (empty($fm_email)) { array_push($errors, "*Campo do e-mail está vazio!"); }
  if (empty($fm_pass1)) { array_push($errors, "*Campo da senha está vazio!"); }

  // Para exista erros 
  if (count($errors) > 0){
    // header("Location: sign.php#register");
  }

  // Para caso não exista erros
  if (count($errors) == 0){
    // Envia dados para o banco de dados
    $sql = "insert into users ( name, email , password) values ( '$fm_name', '$fm_email', '$fm_pass' )";
    mysqli_query($db_connection, $sql);
    header("Location: ../../index.html?submit=sucess");
  }
}

// Para login
if (isset($_POST['form_login'])){

  // Cria as variáveis presentes no formulário enviado pelo metodo POST
  // através do sign.php
  $fm_email = mysqli_real_escape_string($db_connection, $_POST["email"]);
  $fm_pass = mysqli_real_escape_string($db_connection, $_POST["password"]);

  // Verificação de erros:
    // Erros de ausencia de dados
  if (empty($fm_email)) { array_push($errors, "*Campo do e-mail está vazio!"); }
  if (empty($fm_pass1)) { array_push($errors, "*Campo da senha está vazio!"); }

}