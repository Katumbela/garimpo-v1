<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garimpo | ISPT</title>
    <meta http-equiv="refresh" content="2000">
    <script src="jquery.js"></script>
    <script src="jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://use.fontawesome.com/9cc31301fc.js"></script>
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- CSS only --><link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<style>
  .carousel{
    border-radius: 16px;
    color: #effdefcd;
}  


@media (max-width: 760px) {
  .my-minus{
    margin-top: -9rem;

  }
}

span{
      letter-spacing: 1px;
    }

body{
  overflow-x: hidden;
}
.lead span{
    padding: 1rem;
}
.courses{
  display: none;
}
.tag_co:hover{
transform: scale(1.03);
box-shadow: 1px 1px 9px green;
}
nav{
  z-index: 1000;
}
</style>
<body class="body" style="background:  linear-gradient(-150deg , #ffffff, #fffffffa, #f4f7f3f7, #f0efeff7) , url(img/ispt.jfif); background-size: contain; background-repeat: no-repeat;">
   
<nav class="navbar navbar-light position-fixed left-0 right-0" style="background: #047a04; left:0; right: 0"> 
      <div class="container"> 
          <a class="navbar-brand text-white "href="index.html"> 
              <!-- <img src="img/logo01.png" alt="" width="30" height="30"> -->
             Garimpo
          </a>  
          <div>
            
          <a class="text-white" href="tel:+244946445629">&phone; Ajuda</a>
          <?php
            if (isset($_SESSION['nome'])) {
                
                ?>
                   <span class="text-white"> &middot;</span><a class="text-white mx-1" id="sair" style="cursor: pointer">sair</a><span class="text-white"> &middot;</span> <span class="mx-2 text-white"><?=$usu_nome?></span>
                <?php

            }

            
          ?>
          </div>
        </div>
  </nav><br><br>
  <main class="container">
    
   

<div class="row">
  <div class="col-lg-3 col-md-3 w-100 col-xs-3 login text-center" style="background:  linear-gradient(90deg , #dbfad784, #dbfad788, rgba(187, 84, 84, 0.43)) , url(img/dist.webp); background-size: cover; background-repeat: no-repeat; border-bottom-left-radius: 40px; border-bottom-right-radius: 40px;" >
  
<br><br><br>
<a href="login.html">
<button class="btn btn-outline-primary">Fazer login</button> </a>  
  <br><br>
  <a href="cadastro.html">
  <button class="btn btn-outline-success">Quero garimpar</button></a> 
  <br><br>
  </div>
  <div class="col-lg-9 w-100 branco  col-md-9 col-xl-9 ">
      <center>
          <br><br>
     <h1 class="h1">Garimpo ISPT</h1>
     <h4 class="texto">
         Encontre alguém certo para resolver o seu trabalho/caso em até 24h
     </h4>
  </center>
     <ul class="def">
      <li><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hand-thumbs-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
       <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
     </svg> Publique o seu problema gratuitamente</li>
<br>
     <li><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hand-thumbs-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
    </svg> Receba em média 5+ garimpos em 12h</li>
<br>
    <li><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hand-thumbs-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
     <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
   </svg> Veja perfís com CV, portfólio e referências</li>
<br>
   <li><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hand-thumbs-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
  </svg> Logo, selecione o melhor para prosseguir</li>
     </ul>
     <center><a href="cadastro.html"><button class="btn btn-primary" style="background: #047a04;;">Crie uma conta <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi1 bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
    </svg></button></a><br><br>
  <a href="mates_on.php" class="link2">Estudantes</a>
  </center>
  </div>
</div>

  </div>
</div>
<br>
<hr>
<br>

<div class="row">
  <div class="col-12">
      <div class="jumbotron">
          <h3 class="display-6">Departamentos</h3>
          <br>
              <p class="lead">
                <span class="btn-outline-success btn eng m-2"> Engenharias</span> 
                <span class=" btn disabled m-2">Ciências Sociais</span>   
                <span class=" btn disabled m-2">Direito</span>  
                <span class=" btn disabled m-2">  Arquitetura</span></p>
          <hr>

         <div class=" courses flex-wrap gap-4 bg-light py-4 px-3 rounded-2">
          <a  class="tag_co"style="text-decoration: none; background:  #e5ede6; display: grid; place-content: center; padding: .2rem .5rem; border-radius: 60px; height: 2rem; color: green; font-size: 14px;" href="engenharias/engenharia_eletrotecnica.php" title="Clique para acessar">Engenharia Eletrotecnica</a>
          <a class="tag_co" style="text-decoration: none; background: #e5ede6; display: grid; place-content: center; padding: .2rem .5rem; border-radius: 60px; height: 2rem; color: green; font-size: 14px;" href="engenharias/engenharia_informatica.php" title="Clique para acessar">Engenharia Informática</a>
          <a class="tag_co" style="text-decoration: none; background: #e5ede6; display: grid; place-content: center; padding: .2rem .5rem; border-radius: 60px; height: 2rem; color: green; font-size: 14px;" href="#" title="Indisponível no momento">Engenharia Construção Civil</a>
          <a class="tag_co" style="text-decoration: none; background: #e5ede6; display: grid; place-content: center; padding: .2rem .5rem; border-radius: 60px; height: 2rem; color: green; font-size: 14px;" href="#" title="Indisponível no momento">Arquitetura & Urbanismo</a>
         </div>
      </div>
  </div>
</div>
</div>

<br><br>  
<hr>
<br>
<div class="container mx-auto text-center" style="gap: 0;">
          <h2 style="">Como Funciona ?</h2>
<br><br>
          <div class="row">
              <div class="col-md-4 col-12 col-lg-4 col-sm-12">
              <img src="img/ispt.jfif" alt=""  height="10%">
             <br>
                 <h3>Publique seu problema </h3>
        
             
                  Publique o seu problema fácil e rápido  sem taxa alguma
             </div>

             <div class="col-md-4 col-12 my-minus col-lg-4 col-sm-12">
                 <img src="img/ispt.jfif" alt="" height="10%" >
                 <br><h3>Receba as propostas </h3>
                 <p>confira os perfís de cada colega propostos, referência e stars</p>
             </div>

             <div class="col-md-4 col-12 my-minus col-lg-4 col-sm-12">
                 <img src="img/ispt.jfif" alt="" height="10%">
                 <br><h3>Selecione o seu escolhido </h3>
                 <p>após ter conferido cada, finalmente accione o colega certo e toca a trabalhar!</p>
             </div>

          </div>
          
</div>
<center>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <img  src="img/freelancer.jpg"  height="40%"  class="carousel" width="65%" alt="First slide"> 
    </div>
    <div class="carousel-item">
      <img  src="img/help.png"  height="50%"  class="carousel" width="65%" alt="First slide"> 
     </div>
    <div class="carousel-item">
      <img  src="img/dist.webp"  height="40%" width="65%"  class="carousel"  src="img/logo03.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img  src="img/goingup.png"  height="40%" width="65%"  class="carousel"  src="img/logo03.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img  src="img/inclusao.png"  height="40%" width="65%"  class="carousel"  src="img/logo03.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img  src="img/images1.jpg"  height="40%" width="65%"  class="carousel"  src="img/logo03.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img  src="img/img.jpg"  height="40%" width="65%"  class="carousel"  src="img/logo03.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>                          
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></center>
<br>


</main>
<footer class="text-center text-white" style="background-color: #f1f1f1;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://facebook.com/joao.afonso.katumbela"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-facebook"></i></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://twitter.com/joao_katumbela"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="mailto:jkatumbela9@gmail.com"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="instagram.com/gokside"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://linkedin.com/joao-afonso-katombela"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://github.com/katumbela"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  

    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-start text-white py-4 px-3" style="background-color: green; font-size: 14px;">
        © 2022 Copyright -
        <a class="text-white my-auto text-decoration-none" href="http://angofreela.cf/"> Garimpo </a> &middot; <span class="mx-2">suporte: <a class=" text-white" href="tel:+244946445629">946 445 629</a></span> &middot; <span class="mx-2">Email: <a class="text-white" href="mailto:ja3328173@gmail.com">ja3328173@gmail.com</a></span>
    </div>
    <!-- Copyright -->
</footer>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script>


    $(".eng").click(function () {
        $(".courses").slideToggle("fast");
        $(".courses").toggleClass("d-flex");
    })

</script>

</body>
</html>