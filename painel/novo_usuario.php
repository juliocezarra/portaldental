<?php require_once 'partials/header.php' ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ml-auto">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>

        <div class="row justify-content-between pl-3">
          <h2>Cadastro de Usuário</h2>
        </div>
        <form action="helpers/usuarios/insert.php" method="post">
          <div class="form-row">
            <div class="col">
              <label for="login">Login</label>
              <input type="text" id="login" name="login" class="form-control" placeholder="Login" required>
            </div>
            <div class="col">
              <label for="senha">Senha</label>
              <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
            </div>
          </div>

          <div class="form-row mt-2">
            <div class="col">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="name@email.com" required>
            </div>
            <div class="col">
              <label for="telefone">Telefone</label>
              <input type="text" class="form-control" id="telefone" name="telefone" placeholder="555-555-555" required>
            </div>
            
          </div>
          <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </form>
      </main>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>
