<?php

use Database\Database;

require_once "../../../helpers/Database.php";

$db = new Database();

$remove = $db->select("SELECT * FROM `dentistas` WHERE `dentistas`.`id` = " . $_GET['id'] . "");

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt'); // valid extensions
$path = '../../../assets/img/uploads/'; // upload directory
$path2 = 'assets/img/uploads/';
$imagem = $remove[0]->imagem;

if (!empty($_POST['nome']) || !empty($_POST['sobrenome'])) {
   if (isset($_FILES['image'])) {
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
         move_uploaded_file($tmp, $path);

         $imagem = $path2;
         $image = $remove[0]->imagem;
   
         $removeImg = unlink('../'.$image);

      } else {
         echo 'invalid';
      }
   }

   $nome = $_POST['nome'];
   $sobrenome = $_POST['sobrenome'];
   $idade = $_POST['idade'];
   $distancia = $_POST['distancia'];
   

   $update = $db->update("UPDATE `dentistas` SET 
      `nome` = '$nome',
      `sobrenome` = ' $sobrenome',
      `idade` =  '$idade',
      `distancia` =  '$distancia',
      `imagem` =  '$imagem'

      WHERE `dentistas`.`id` = ".$_GET['id']."");

   header("Location: http://localhost/portaldental/painel/");
}
