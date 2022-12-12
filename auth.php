<?php
include('header.php');
?>

<?php


 $emai = $_GET['email'];

$inserir = "SELECT * FROM cadastro WHERE email='$emai'";
$feito = $conexao -> query($inserir);

   if (mysqli_num_rows($feito) > 0) {
       
    session_start();
    $_SESSION['email'] = $emai;
    header('location:dashboard.php');
}

else{
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
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light"> 
        <div class="container"> 
            <a class="navbar-brand" href="#"> 
                <img src="img/logo01.png" alt="" width="30" height="30"> 
            </a>  <?=$nome?>
        </div>
    </nav>
<br>
<center>
    
  <br>
  <h2>Erro ao iniciar sessão <?=$nome?> ?</h2>
  <p><a href="login.html">Clique aqui</a> para tentar novamente</p>
</center>

<?php }?>

</body>
</html>