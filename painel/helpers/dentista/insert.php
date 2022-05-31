<?php

use Database\Database;

require_once "../../../helpers/Database.php";

$db = new Database();


$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt'); // valid extensions
$path = '../../../assets/img/uploads/'; // upload directory
$path2 = 'assets/img/uploads/';
if (!empty($_POST['nome']) || $_FILES['image']) {
   $img = $_FILES['image']['name'];
   $tmp = $_FILES['image']['tmp_name'];
   // get uploaded file's extension
   $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
   // can upload same image using rand function
   $final_image = rand() . '.' . $ext;
   // check's valid format
   if (in_array($ext, $valid_extensions)) {
      $path = $path . strtolower($final_image);
      $path2 = $path2 . strtolower($final_image);
      if (move_uploaded_file($tmp, $path)) {
         echo "<img src='$path' />";
         $nome = $_POST['nome'];
         $sobrenome = $_POST['sobrenome'];
         $idade = $_POST['idade'];
         $distancia = $_POST['distancia'];

         //insert form data in the database
         $insert = $db->select("INSERT dentistas (nome,sobrenome,idade,distancia,imagem) VALUES ('" . $nome . "','" . $sobrenome . "','" . $idade . "','" . $distancia . "','" . $path2 . "')");
         //echo $insert?'ok':'err';
      }
      header("Location: http://localhost/portaldental/painel/"); 
   } else {
      echo 'invalid';
   }
}
