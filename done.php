<?php

include('header.php');
?>

<?php


$interesse = $_GET['area'];
$emai =$_GET['email'];
$nome = $_GET['nome'];
$curso = $_GET['curso'];


$inserir = "INSERT INTO cadastro (interesses) VALUE ('$interesse') where email='$emai'";
$feito = $conexao -> query($inserir);
   
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastrado com Sucesso - AngoFreela </title>
    <script src="jquery.js"></script>
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-light" style="background: #047a04;"> 
      <div class="container"> 
          <a class="navbar-brand text-white " href="index.html"> 
              <!-- <img src="img/logo01.png" alt="" width="30" height="30"> -->
             Garimpo
          </a>  
            <span class="text-white">Ajuda</span>
        </div>
  </nav>
<br>
<center>
  <br>
  <div class="w-50">
    <h2 class="text-success">Garimpo ISPT</h2>
    <hr></div>
  <br>

<?php
  $link = "";

  switch ($curso) {
    case 'Eng. Eletrotécnica':
      $link .= "<a href='engenharias/engenharia_eletrotecnica.php'>Clique aqui</a> para ir à pagina inicial";
      break;
    case 'Eng. Informática':
      $link .= "<a href='engenharias/engenharia_informatica.php'>Clique aqui</a> para ir à pagina inicial";
      break;
    
    default:
      $link ="Seu curso ainda não tem um dashboard, avisaremos em breve! ";
      break;
  }

?>

  <h2>Sua conta foi criada com sucesso <?=$nome?> !</h2>
  <p><?=$link?></p>
</center></body>
</html>