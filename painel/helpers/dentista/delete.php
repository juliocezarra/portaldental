<?php

use Database\Database;

require_once "../../../helpers/Database.php";

$db = new Database();

$remove = $db->select("SELECT * FROM `dentistas` WHERE `dentistas`.`id` = " . $_GET['id'] . "");
$delete = $db->delete("DELETE FROM `dentistas` WHERE `dentistas`.`id` = " . $_GET['id'] . "");

$image = $remove[0]->imagem;

$removeImg = unlink('../'.$image);

header("Location: http://localhost/portaldental/painel/"); 


