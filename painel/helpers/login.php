<?php 
use Database\Database;
require_once "../../helpers/Database.php";

$db = new Database();

if (isset($_POST['login'])) {
    $login = $_POST['login'];
} else {
    $login = null;
}

if (isset($_POST['password'])) {
    $senha = $_POST['password'];
} else {
    $senha = null;
}

$result = $db->select(
    "SELECT * FROM users WHERE login = '$login'; "
);

$result = $result[0];

if(isset($result)) {
    $senhaDb = $result->password;
    $loginDb = $result->login;
} else{
    $senhaDb = null;
    $loginDb = null;
}

if ($login != null && $senha != null) {
    if ($login == $loginDb && $senha == $senhaDb) {
        header("Location: http://localhost/portaldental/painel/"); 
    } else {
        header("Location: http://localhost/portaldental/painel/login.php"); 
    }
}