<?php require_once 'partials/header.php' ?>

<?php

use Database\Database;

require_once "../helpers/Database.php";

$db = new Database();

$dentista = $db->select("SELECT * FROM `dentistas` WHERE `dentistas`.`id` = " . $_GET['id'] . "");
$dentista = $dentista[0];

?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ml-auto">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>

        <div class="row justify-content-between pl-3">
          <h2>Cadastro de Dentistas</h2>
        </div>
        <form action="helpers/dentista/update.php?id=<?= $dentista->id ?>" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <div class="col">
              <label for="nome">Nome</label>
              <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" value="<?= $dentista->nome ?>">
            </div>
            <div class="col">
              <label for="sobrenome">Sobrenome</label>
              <input type="text" id="sobrenome" name="sobrenome" class="form-control" placeholder="Sobrenome" value="<?= $dentista->sobrenome ?>">
            </div>
          </div>

          <div class="form-row mt-2">
            <div class="col">
              <label for="idade">Idade</label>
              <input type="number" class="form-control" id="idade" name="idade" placeholder="31" value="<?= $dentista->idade ?>">
            </div>
            <div class="col">
              <label for="distancia">Distancia</label>
              <input type="text" class="form-control" id="distancia" name="distancia" placeholder="20" value="<?= $dentista->distancia ?>">
            </div>
            
          </div>
          <div class="form-group mt-3">
            <img style="height: 200px;border-radius:50%;border:solid 2px #707070;" src="../<?= $dentista->imagem ?>" /><br>
            <input class="mt-3" id="image" type="file" accept="image/*" name="image" value="../<?= $dentista->imagem ?>" />
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </main>
    </div>
  </div>

  </body>
</html>
