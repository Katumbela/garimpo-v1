<?php
session_start();
include('../functions/con_db.php');
?>

<?php

if (isset($_SESSION['nome'])) {
    echo "";
}

else{
    echo "";
}


if (isset($_GET['c'])) {
    $id_post = base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_GET['c'])))));

    $sel_p = "SELECT * FROM posts WHERE id ='$id_post'";
$feitop = $conexao-> query($sel_p);
   $dadosp= mysqli_fetch_array($feitop);
   $desc = $dadosp['descricao'];
   $quem = $dadosp['quem'];
   $foto = $dadosp['foto'];
   $quando = $dadosp['quando'];
   $num_quem = $dadosp['numero'];
   $curso = $dadosp['curso'];
  }

  if (empty($_GET['c'])) {
    header("location: engenharia_eletrotecnica.php");
  }

  $inserir = "SELECT * FROM cadastro WHERE numero='$num_quem'";
  $feito = $conexao -> query($inserir);
   $dados= mysqli_fetch_array($feito);
   $id = $dados['id'];
   $usuario = $dados['nome'];
   $sala = $dados['sala'];
   $curso_quem = $dados['curso'];
   $foto_usuario = $dados['foto_perfil'];
   $fb = $dados['fb'];
   $lin = $dados['lin'];
   $wp = $dados['wp'];
   $insta = $dados['insta'];
   $usuario_email = $dados['email'];
   $hab= $dados['habilidades'];

   $u_n1 = explode(" ", $usuario);
   $usu_nome = $u_n1[0];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Resolver caso | Garimpo </title>
    <meta http-equiv="refresh" content="2000">
    <script src="../jquery.js"></script>
    <link rel="stylesheet" href="../estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<style>
    body{
        overflow-x: hidden;
    }
    span{
      letter-spacing: 1px;
    }
    

.form{
    color: rgb(180, 245, 195);
}
.formulario{
    background:  rgb(171, 226, 206)!important;
    color: green!important;
}
.form{
    width: 80%;
    border-radius: 4px;
    border-color: rgb(171, 226, 206)!important;
    box-shadow: 0px 2px 2px 2px;
}
.form:hover{
    border-color: rgb(176, 231, 209)!important;
}


.carousel{
    border-radius: 16px;
}  

body{
  overflow-x: hidden;
}
.lead span{
    padding: 1rem;
}
.tag_co:hover{
transform: scale(1.03);
box-shadow: 1px 1px 9px green;
}

form button{
    color: white!important;
    border: none;
    border-radius: 0;
    padding: 0 .5rem;
    background:rgb(16, 162, 16)!important; 
}
form .pub{
    background: white!important;
    padding: .1rem .3rem;
    border-radius: 0; 
}
form button:hover{
    transform: scale(1)!important;
}

@media (min-width: 800px) {
    .w-lg-50{
      width: 60%!important;
    }
    .w-100{
      width: 80%!important;
    }
  }
  
  @keyframes girar {
    to{
      transform: rotate(360deg);
    }
  }
  .loadd{
    display: none;
  }
  ul li{
    display: inline!important;
  }
</style>
<body>
<nav class="navbar navbar-light position-fixed left-0 right-0" style="background: #047a04; left:0; right: 0"> 
      <div class="container"> 
          <a class="navbar-brand text-white "href="../index.php"> 
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
  </nav>
<br><br>
  <div class="container">
    
<br>
<a href="/">Voltar</a>
    <br>
<br>
        <img src="../eng_pics/<?=$foto?>" class="w-100" alt="">
    
    <br>
    <br>

    <div class="bg-light rounded-3 p-3">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 col-sm-12 col-xl-6">
                    <h3 class="text-success"><?=$quem?></h3>
                    <p>
                      <?=$desc?>
                    </p>
                    <hr style="fill: gray;">
        <div class="d-flex gap-3 my-2">
<?php
  if (isset($_SESSION['nome'])) {
    

    ?>
          <a href="<?=$fb?>"><svg fill="currentColor" class="text-primary my-auto disabled" height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a>
          
          <a href="<?=$lin?>"><svg fill="currentColor" class="text-primary my-auto" height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
            
          <a href="<?=$insta?>"><svg fill="currentColor" style="color: #da5ad1" class=" my-auto" height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
          
          <a href="<?=$wp?>"><svg fill="currentColor" class="text-success my-auto" height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"/></svg></a>
      </div>
    <?php

  }

  else{

    ?>
          <a><svg fill="currentColor" class="text-secondary my-auto" height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a>
          
          <a><svg fill="currentColor" class="text-secondary my-auto" height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
            
          <a><svg fill="currentColor"  class="text-secondary my-auto" height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
          
          <a><svg fill="currentColor" class="text-secondary my-auto" height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"/></svg></a>
          <br>
  
         
        </div>
        <span style="font-size: 12px" class="text-warning">Você precisa estar logado ou ter uma conta para resolver este caso!</span><br>
        <a style="font-size: 12px" href="../login.html">Fazer login</a>
        
        <?php
  }

?>
            </div>
            <div class="col-12 text-center col-md-6 col-lg-6 col-sm-12 col-xl-6">
                <div class="my-auto">
                    <img src="img/ispt.jfif" class="w-25 my-auto rounded-circle" alt="">
                </div>
            </div>
        </div>
    </div>

    <br><br>
  </div>
  
  <div class="container">
    <p  style="font-size: 14px">Para resolver este caso, puxe o necessitado em uma de suas redes sociais mencionando a plataforma ou com um screenshot desta pagina. faça bom uso da plataforma e dos dados cá contidos, atenciosamente Garimpo ISPT. </p>
    <br><br>

    <span>Suporte: <a href="mailto:suporte@garimpo.ga">suporte@garimpo.ga</a></span>
  </div>
  

  <div class="container">
  <br>
<hr>
<br>
    <h4>Quem postou este caso ?</h4>
    <center>
      <img src="../perf_pics/<?=$foto_usuario?>" style="border: 2px solid green;" class="rounded-circle" height="80em" width="80em" alt="">
      <h3><b class="text-success"><?=$quem?></b></h3>
      <div class=" mx-auto">
        <span>Sala: <?=$sala?></span><br>
        <span>Curso: <?=$curso_quem?></span>
      </div>
    </center>
  </div>
  <br><br>

  
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
        href="mailto:ja3328173@gmail.com"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://instagram.com/katumbelaa"
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

  </main>
  

    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-start text-white py-4 px-3" style="background-color: green; font-size: 14px;">
        © 2022 Copyright -
        <a class="text-white my-auto text-decoration-none" href="http://angofreela.cf/"> Garimpo </a> &middot; <span class="mx-2">suporte: <a class=" text-white" href="tel:+244946445629">946 445 629</a></span> &middot; <span class="mx-2">Email: <a class="text-white" href="mailto:ja3328173@gmail.com">ja3328173@gmail.com</a></span>
    </div>
    <!-- Copyright -->
</footer>


  <script>
    

    $(".eng").click(function () {
        $(".courses").slideToggle("fast");
        $(".courses").toggleClass("d-flex");
    })


    $("#sair").click(function () {
        location.href = "./functions/sair.php";
    })


    $("#salvar").click(function(){
        $(".loadd").fadeIn("fast");
        let fb, insta, linkedin, wp, id;
        insta = $("#insta").val();
        linkedin = $("#in").val();
        fb = $("#fb").val();
        wp = $("#wp").val();
        id = $("#id").val();

        var dados = {
            fb: fb,
            insta: insta,
            wp: wp,
            id: id,
            link: linkedin, 
        }

        $.post('./functions/updates.php', dados, function(req, res){
          setTimeout(() => {
        $(".loadd").fadeOut("fast");
            $(".res").html(" <div class='alert alert-success w-auto my-5'>Sua alteração foi feita com sucesso, recarregue a pagina para ver as alterações</div>");
            
          }, 2000);
        })

         })
  </script>
</body>
</html>