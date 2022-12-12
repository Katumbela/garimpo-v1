<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro - Garimpo </title>
    <script src="jquery.js"></script>
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<style>
  
  @media (min-width: 800px) {
    .w-lg-50{
      width: 50%!important;
    }
  }
</style>
<body class="container">
<br>
<a href="index.php">Voltar</a>
<center>
<br>
<div class="w-75">
  <h2 class="text-success">Garimpo ISPT</h2>
  <hr></div>
<br>
  <h2>Procura por Ajuda ?</h2>
<form action="keep_signup.php" class="container w-100 w-lg-50" method="post">
      <div class="container">
        <div class=" ">
          <br>
          <input type="text" name="nome" required class="form-control" placeholder="Nome completo" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
         <br>
         <input type="number" name="num" required class="form-control" placeholder="Nº de estudante" id="exampleInputEmail1" aria-describedby="emailHelp">
        
         <br>
         <input type="tel" name="tel" required class="form-control" placeholder="Telefone" id="exampleInputEmail1" aria-describedby="emailHelp">
        
         <br>
         <input type="email" name="email" required class="form-control" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
        
         <br>
         <input type="text" aria-autocomplete="false" autocomplete="false" name="sala" required class="form-control" placeholder="Sala/Turma" id="exampleInputEmail1" aria-describedby="emailHelp">
       <br>
       <select name="ano" id="" class="form-control">
        <option value="">Ano de frequência</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
       </select>
<br>
       <select name="curso" id="" class="form-control">
        <option value="">Selecione o seu curso</option>
        <option value="Eng. Eletrotécnica">Engenharia Eletrotécnica</option>
        <option value="Eng. C. Civil">Engenharia de Construção Civil</option>
        <option value="Eng. Informática">Engenharia Informática</option>
        <option value="Eng. Arq. Urbanismo">Engenharia de Arq. e Urbanismo</option>
        <option value="Direito">Direito</option>
        <option value="Contabilidade">Cintabilidade e Gestão</option>
        <option value="Finanças">Finanças</option>
       </select>

         <br>
         <input type="password" name="senha" required class="form-control" placeholder="Crie uma senha" id="exampleInputEmail1" aria-describedby="emailHelp">
        
         <br>
        
         <div class="text-start">
          
         <label for="">Habilidades </label><br>
         <textarea class="form-control my-2" name="hab" id="" cols="30" rows="3" placeholder="Insira suas habilidades separando por virgulas"></textarea>
        
         </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div><br><br>
    </form>
    <p class="desc">Já tem uma conta ? <a href="login.php">faça login</a>!</p>

</center>
</body>
</html>