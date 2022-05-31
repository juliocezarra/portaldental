<?php

use Database\Database;

require_once "../../../helpers/Database.php";

$db = new Database();

$delete = $db->delete("DELETE FROM `users` WHERE `users`.`id` = " . $_GET['id'] . "");


header("Location: http://localhost/portaldental/painel/usuarios.php"); 


