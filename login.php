<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cadastrar </title>
    <script src="jquery.js"></script>
    <script src="jquery.min.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<style>
  @media (min-width: 800px) {
    .w-lg-50{
      width: 40%!important;
      
    }
  }

  @keyframes girar {
    to{
      transform: rotate(360deg);
    }
  }
</style>
<body class="container">
<br>
  <a href="index.php">Voltar</a>
<center>
  <br>
  <div class="w-50">
    <h2 class="text-success">Garimpo ISPT</h2>
    <hr></div>
  <br>
  <h2>Entrar na sua conta</h2>
<form action="login_set.php" class="w-lg-50 w-75" method="post">
      <div class="container">
        <div class="mb-3 ">
          <br>
          <input type="tel" name="email" class="form-control" placeholder="Nº de estudante" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
        <div class="mb-3">
          <br>
          <input type="password" name="senha" class="form-control" placeholder="Sua senha" id="exampleInputPassword1">
        </div>
        <div class="mb-3 text-start form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Lembrar de mim </label>
        </div>
        <button type="submit" class="btn w-100 btn-primary">Entrar</button>
      </div>
    </form>
    <br><br>
    <p class="desc">Não possui ainda uma conta? <a href="cadastro.php">Crie uma</a>!</p>

</center></body>
</html>