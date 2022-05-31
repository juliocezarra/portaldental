<?php

use Database\Database;

require_once "../../../helpers/Database.php";

$db = new Database();

   $login = $_POST['login'];
   $password = $_POST['senha'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];

   //insert form data in the database
   $insert = $db->select("INSERT users (login,password,email,telefone) VALUES ('" . $login . "','" . $password . "','" . $email . "','" . $telefone . "')");

   header("Location: http://localhost/portaldental/painel/usuarios.php"); 

