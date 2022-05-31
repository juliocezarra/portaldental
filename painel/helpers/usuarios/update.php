<?php

use Database\Database;

require_once "../../../helpers/Database.php";

$db = new Database();
   $login = $_POST['login'];
   $password = $_POST['senha'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   

   $update = $db->update("UPDATE `users` SET 
      `login` = '$login',
      `password` = ' $password',
      `email` =  '$email',
      `telefone` =  '$telefone'

      WHERE `users`.`id` = ".$_GET['id']."");

   header("Location: http://localhost/portaldental/painel/usuarios.php"); 

