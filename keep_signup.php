<?php
include('header.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$num = $_POST['num'];
$tel = $_POST['tel'];
$sala = $_POST['sala'];
$ano = $_POST['ano'];
$curso = $_POST['curso'];
$hab = $_POST['hab'];
$senha = $_POST['senha'];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro de conta | Garimpo </title>
    <script src="jquery.js"></script>
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<style>
  
  @media (min-width: 800px) {
    .w-lg-50{
      width: 40%!important;
    }
  }
</style>
<body>
<br>
<center>
  <br>
  <div class="w-75 w-lg-50">
    <h2 class="text-success">Garimpo ISPT</h2>
    <hr></div>
    <br>
    
    <?php

      $sel2 = "SELECT * FROM cadastro WHERE numero = '$num'";
      $con2 = $conexao->query($sel2);
      $linha =mysqli_num_rows($con2);
      if ($linha >= 1) {
        
        ?>
        

<div style="width: 5rem; height: 5rem; display: grid; place-content: center;" class="mx-auto bg-warning">
   <!-- Generated by IcoMoon.io -->
<svg fill="white" class="rounded-3" version="1.1" xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 24 24">
<title>erro</title>
<path d="M16.316 6.624l-4.114 4.114-4.114-4.114-1.061 1.061 4.114 4.114-4.114 4.114 1.061 1.061 4.114-4.114 4.114 4.114 1.061-1.061-4.114-4.114 4.114-4.114-1.061-1.061z"></path>
<path d="M19.955 4.045c-2.036-2.036-4.848-3.295-7.955-3.295-6.213 0-11.25 5.037-11.25 11.25 0 3.107 1.259 5.919 3.295 7.955v0c2.036 2.036 4.848 3.295 7.955 3.295 6.213 0 11.25-5.037 11.25-11.25 0-3.107-1.259-5.919-3.295-7.955v0zM12 21.75c-5.376 0-9.75-4.374-9.75-9.75s4.374-9.75 9.75-9.75 9.75 4.374 9.75 9.75-4.374 9.75-9.75 9.75z"></path>
</svg>
  </div>
  <br><br>
  <div class="container">
    
  <h2 class="">Desculpa <?=$nome?>, mas já existe uma conta com estes dados!</h2>

  </div>
        <?php
      
      }
      else {

        

          $inserir = "INSERT INTO `cadastro` ( `nome`, `numero`, `telefone`, `email`, `senha`, `sala`, `curso`, `ano`, `habilidades`,`foto_perfil`) VALUES ('$nome', '$num', '$tel', '$email', '$senha', '$sala', '$curso', '$ano', '$hab','default.png')";

          $feito = $conexao -> query($inserir);
          session_start();
          $_SESSION['nome'] = $nome;
          $_SESSION['num_est'] = $num;
          $_SESSION['email'] = $email;
          $_SESSION['tel'] = $tel;
          $_SESSION['curso'] = $curso;
          
    ?>

<div style="width: 5rem; height: 5rem; display: grid; place-content: center;" class="mx-auto bg-success">
     <!-- Generated by IcoMoon.io -->
<svg fill="white" version="1.1" xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 24 24">
<title>check</title>
<path d="M9.331 21.375l-0.346-0.352-0.185-0.183-4.040-4.041 0.002-0.003-3.922-3.922 4.576-4.576 3.917 3.917 9.341-9.341 4.576 4.576-9.869 9.874zM6.872 16.79l2.459 2.459 0.005-0.005 0.003 0.003 2.452-2.452 0.528-0.533 8.811-8.811-2.454-2.454-9.341 9.341-3.917-3.917-2.454 2.454 3.912 3.912z"></path>
</svg>
  </div>

  <br>
  <h2>Qual a sua dificuldade <?=$nome?> ?</h2>
<form action="done.php" method="get" class="w75 w-lg-50">
      <div class="container">
        <div class="mb-3 ">
          <br>
         <input type="hidden" value="<?=$email?>" name="email">
         <input type="hidden" value="<?=$nome?>" name="nome">
         <input type="hidden" value="<?=$curso?>" name="curso">
          <br>
         <select class="form-control" name="area" id="area">
           <option value=":">Selecione sua dificuldade</option>
           <option value="">Adicionar depois</option>
           <option value="Web-Dev">An. Mat. 1</option>
           <option value="Web-Dev">An. Mat. 2</option>
           <option value="Web-Dev">An. Mat. 3</option>
           <option value="Fotógrafo">Matemática</option>
           <option value="Desginer">Algebra Linear</option>
           <option value="Contabilista">E. e pensamento social</option>
           <option value="Android-Dev">Física 1</option>
           <option value="Android-Dev">Física 2</option>
           <option value="Android-Dev">Física 1</option>
           <option value="Android-Dev">Introdução a Eletrotecnia </option>
           <option value="Tradutor">Introdução à Programação</option>
           <option value="Marketing">An. de Circuitos</option>
           <option value="Criador de conteudo digital">Língua Portuguesa</option>
           <option value="Matemático">Inglês</option>
           <option value="Fisíco">Química</option>
         </select>
         <br><br>
        <button type="submit" class="btn btn-primary">Continuar</button>
      </div><br><br>
    </form>
    <br>

<?php
      }
?>
    <br><br>
    <span class="text-secondary">&copy; Garimpo 2022</span>
</center>
<br>
</body>
</html>