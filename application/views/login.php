
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Tamanduá Sistemas</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="<?= base_url()?>dashboard/logar" method="post">
      <img class="mb-4" src="<?= base_url(); ?>assets/img/tamandua.jpg" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Tamanduá Sistemas</h1>
      <label for="inputEmail" class="sr-only">CPF</label>
      <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" maxlength="11" required autofocus>
      <label for="inputPassword" class="sr-only">Senha:</label>
      <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
      <!-- <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> -->
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
    </form>
  </body>
</html>
