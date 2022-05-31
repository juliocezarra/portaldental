<?php
use Database\Database;

require_once "../helpers/Database.php";

$db = new Database();

$dentists = $db->select(
    "SELECT * FROM dentistas;"
);

require_once "partials/header.php";
?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ml-auto">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>

      <div class="row justify-content-between px-5">
        <h2>Dentistas Cadastrados</h2>
        <a href="novo_dentista.php" class="btn btn-success my-1">Novo</a>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Sobrenome</th>
              <th scope="col">Idade</th>
              <th scope="col">Distancia</th>
              <th scope="col">Ação</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            foreach ($dentists as $item) {
            ?>
                <tr>
                    <td><?= $item->id ?></td>
                    <td><?= $item->nome ?></td>
                    <td><?= $item->sobrenome ?></td>
                    <td><?= $item->idade . " anos" ?></td>
                    <td><?= $item->distancia . "KM" ?></td>
                    <td class="td-action">
                        <a class="btn btn-primary btn-sm mr-2" href="editar_dentista.php?id=<?= $item->id ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger btn-sm mr-2"  href="helpers/dentista/delete.php?id=<?= $item->id ?>"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

  </body>
</html>
