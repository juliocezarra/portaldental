<?php
use Database\Database;

require_once "../helpers/Database.php";

$db = new Database();

$users = $db->select(
    "SELECT * FROM users;"
);

require_once "partials/header.php";
?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ml-auto">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>

      <div class="row justify-content-between px-5">
        <h2>Usuários Cadastrados</h2>
        <a href="novo_usuario.php" class="btn btn-success my-1">Novo</a>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Login</th>
              <th scope="col">Senha</th>
              <th scope="col">E-mail</th>
              <th scope="col">Telefone</th>
              <th scope="col">Ação</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            foreach ($users as $item) {
            ?>
                <tr>
                    <td><?= $item->id ?></td>
                    <td><?= $item->login ?></td>
                    <td><?= $item->password ?></td>
                    <td><?= $item->email ?></td>
                    <td><?= $item->telefone ?></td>
                    <td class="td-action">
                        <a class="btn btn-primary btn-sm mr-2" href="editar_usuario.php?id=<?= $item->id ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger btn-sm mr-2"  href="helpers/usuarios/delete.php?id=<?= $item->id ?>"><i class="fa-solid fa-trash"></i></a>
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
