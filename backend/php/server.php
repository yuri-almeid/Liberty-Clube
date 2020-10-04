<?php

// Inicia uma sessão com o usuário
session_start();

// Inclui a função que faz a conexão com o banco de dados
include_once 'db.php';


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
    // Erros com senhas que não batem
  if ($fm_pass1 != $fm_pass2){ array_push($errors, "*As senhas estão diferentes!"); }
    // Verifica tamanho da senha
  if (strlen($fm_pass1) < 8 ){ array_push($errors, "*A sua senha deve possuir no mínimo 8 caracteres!"); }
    
  // Verifica se existe algum email cadastrado
  $user_check = "SELECT * FROM users WHERE email='$fm_email' LIMIT 1";
  $result = mysqli_query($db_connection, $user_check);
  $user = mysqli_fetch_assoc($result);
  if ($user) {
    if ($user['email'] === $fm_email) {
      array_push($errors, "*Este E-mail já está cadastrado!");
    }
  }
  
  // Para exista erros 
  if (count($errors) > 0){
    // header("Location: sign.php#register");
  }

  // Para caso não exista erros
  if (count($errors) == 0){

    //Pega data da criação da conta
    $fm_date = date("Y-m-d");

    // Criptografa a senha do usuário
    $fm_pass = md5($fm_pass1);

    // Envia dados para o banco de dados
    $sql = "insert into users ( name, email, password, creation_date) values ( '$fm_name', '$fm_email', '$fm_pass', '$fm_date' )";
    mysqli_query($db_connection, $sql);

    // AQUI VAI LOGAR O USUÁRIO


    // CRIAR PAGINA DE CADASTRO COM SUCESSO
    header("Location: index.html?submit=sucess");
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
  
  // Para caso não exista erros
  if (count($errors) == 0){

    // Criptografa a senha do usuário
    $fm_pass = md5($fm_pass);

    // Envia dados para o banco de dados

    // PEGAR APENAS O REGISTRO
    $query = "SELECT * FROM users WHERE email='$fm_email' AND password='$fm_pass'";
    $results = mysqli_query($db_connection, $query);

    if (mysqli_num_rows($results) == 1) {
      
      
      
  	  header('location: index.php?submit=sucess');
  	}else {
  		array_push($errors, "*Senha e/ou usuário inválido!");
  	}

  }
}

// Para recuperação de senha
if (isset($_POST['form_recovery'])){

  $fm_email = mysqli_real_escape_string($db_connection, $_POST["email"]);

  if (empty($fm_email)) { array_push($errors, "*Campo do e-mail está vazio!"); }

  // Verifica se existe algum email cadastrado
  $user_check = "SELECT * FROM users WHERE email='$fm_email' LIMIT 1";
  $result = mysqli_query($db_connection, $user_check);
  $user = mysqli_fetch_assoc($result);
  if ($user) {
    if ($user['email'] === $fm_email) {
      
      header('location: recover-sucess.html');

    } 
  } else {
    array_push($errors, "* Este email não está cadastrado no sistema!");
  }

}