<?php
session_start();
include('header.php');
?>

<?php

if (isset($_SESSION['nome'])) {
    echo "";
}

else{
    header("location: index.php");
}

$num_e = $_SESSION['num_est'];

 $num = $num_e;

$inserir = "SELECT * FROM cadastro WHERE numero='$num'";
$feito = $conexao -> query($inserir);
   $dados= mysqli_fetch_array($feito);
   $id = $dados['id'];
   $usuario = $dados['nome'];
   $foto = $dados['foto_perfil'];
   $fb = $dados['fb'];
   $lin = $dados['lin'];
   $wp = $dados['wp'];
   $insta = $dados['insta'];
   $usuario_email = $dados['email'];
   $hab= $dados['habilidades'];
   $sala = $_SESSION['sala'];
   $curso = $dados['curso'];
   $tel = $_SESSION['telefone'];
   $quando = $_SESSION['quando'];
   $ano = $_SESSION['ano'];

   $u_n1 = explode(" ", $usuario);
   $usu_nome = $u_n1[0];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bem vindo <?=$usu_nome?> | Garimpo </title>
    <meta http-equiv="refresh" content="2000">
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<style>
    body{
        overflow-x: hidden;
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


nav{
  z-index: 1000;
}

@media (min-width: 800px) {
    .w-lg-50{
      width: 60%!important;
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
</style>
<body>
<nav class="navbar navbar-light position-fixed left-0 right-0" style="background: #047a04; left:0; right: 0"> 
      <div class="container"> 
          <a class="navbar-brand text-white "href="index.php"> 
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
<br><br><br>
  <div class="container">
    <br>
    <center>
        <img src="img/ispt2.png" class="w-50" alt="">
    </center>
    <br>
    <br>

    <div class="bg-light rounded-3 p-3">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 col-sm-12 col-xl-6">
                    <h3 class="text-success"><?=$usuario?></h3>
                    <p>
                        <span>Nº <?=$num_e?></span><br>
                        <span><?=$curso?></span><br>
                        <span><?=$sala?></span>
                    </p>
            </div>
            <div class="col-12 text-center col-md-6 col-lg-6 col-sm-12 col-xl-6">
                <div class="my-auto">
                    <img src="./perf_pics/<?=$foto?>" class="w-25 my-auto rounded-circle" alt="">
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <h3>Redes Sociais</h3>
    <br>
            <input type="hidden" name="" value="<?=$id?>" id="id">
    <ul style="list-style-type: none;" class="w-100 ul w-lg-50">
        <li class="d-flex gap-3 my-2">
        <svg fill="currentColor" class="text-primary my-auto" height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
            <input type="text" id="fb" name="" value="<?=$fb?>" placeholder="facebook.com/joao.afonso.katombela" class="form-control" id="">
        </li>
        <li class="d-flex gap-3 my-2">
        <svg fill="currentColor" class="text-primary my-auto" height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
            <input type="text" id="in" name="" value="<?=$lin?>" placeholder="linkedin.com/joao-afonso-katumbela" class="form-control" id="">
        </li>
        <li class="d-flex gap-3 my-2">
        <svg fill="currentColor" style="color: #da5ad1" class=" my-auto" height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
            <input type="text" id="insta" name="" value="<?=$insta?>" placeholder="instagram.com/katumbelaa" class="form-control" id="">
        </li>
        <li class="d-flex gap-3 my-2">
        <svg fill="currentColor" class="text-success my-auto" height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"/></svg>
            <input type="text" id="wp" name="" value="<?=$wp?>" placeholder="+244946445629" class="form-control" id="">
        </li>
        <li class="my-2">
            <button style="float: right" id="salvar" class="btn btn-outline-success">Salvar</button>
        </li>
    </ul><br><br>
    <div style="height: 2rem; width: 2rem; border: 4px solid green; border-radius: 100px; border-bottom: 4px solid white; animation: .7s girar ease-in-out infinite;" class="mx-auto loadd"></div>
    <div class="res"></div>
    <br>
    <hr>

        
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

                <div class="d-flex courses flex-wrap gap-4 bg-light py-4 px-3 rounded-2">
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
  
  
  <div class="container">
  <div class="casos row py-3 rounded-3 px-3">

        <?php
            $get_c = "SELECT *  FROM posts WHERE numero = '$num'  AND quem ='$usuario'";
            $con_e = $conexao->query($get_c);
            $quantos_c = mysqli_num_rows($con_e);
            while($dados_e = mysqli_fetch_array($con_e)){

                

        $quem = $dados_e['quem'];
        $foto = $dados_e['foto'];
        $curso = $dados_e['curso'];
        $desc = $dados_e['descricao'];
        $quando = $dados_e['quando'];
        $num = $dados_e['numero'];
        $id = $dados_e['id'];
        $encoded_id = base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($id)))));


        $sql_c = "SELECT * FROM cadastro WHERE numero = '$num'";
        $con_c = $conexao->query($sql_c);
        $dad_c = mysqli_fetch_array($con_c);
        $sala = $dad_c['sala'];
        $foto_perf = $dad_c['foto_perfil'];
        $curso_prop = $dad_c['curso'];

                echo  "

                <div class='col-12 my-4 my-lg-0 my-md-2 my-sm-2 my-4 my-lg-3 my-md-2 my-sm-2 col-md-6 col-lg-4'>
                <div class='quad p-3 rounded-2 shadow'>
                    <div style='border-bottom: #047a0420 1px solid; padding-bottom: .5rem' class='head d-flex w-100'>
                        <img src='./perf_pics/{$foto_perf}' style='height: 3em; width: 3.5em; border: 1px solid green ' title='{$quem}' class='rounded-circle my-auto'
                            style='border: 1px solid green' alt=''>
                        <div class='datas w-100 my-auto ms-2' style='letter-spacing:1px!important'>
                            <span class=' text-success font-bold' style='letter-spacing:1px!important'>{$quem}</span><br>
                            <span
                                style='font-size: 10px; margin-top: -.5rem!important; letter-spacing:1px!important'>{$sala} &middot; {$curso_prop} 
                                </span>
                        </div>
                    </div>
                    
                    <p class='my-2' style='font-size: 10px; color: rgba(0, 128, 0, 0.604);'>Clique na foto para ver
                        melhor</p>
            
                    <div class='corpo'>
                        <div class='img_caso'>
                            <a href='./eng_pics/{$foto}'>
                                <div class='w-100' style='background: url(./eng_pics/{$foto}) center center; height: 9rem; background-size: cover; box-shadow: inset -1px 1px 7px green;'></div>
                            </a>
                        </div>
                        <div style=' font-size: 13px;' class='desc_caso w-100'>
                            <br>
                            <p>Preciso de bater esse caso para o pessoal da minha turma, é caso de física e precisa ser
                                entregue até o dia 12 deste mês</p>
                        </div>
                        
                        <div style='text-align: right '>
                        <a  onclick='apagar(`{$id}`)'><button style='' class='btn btn-outline-danger rounded-pill'>Apagar</button></a>
                        <a href='./engenharias/solve_case.php?c={$encoded_id}'><button style='' class='btn btn-outline-success rounded-pill'>Resolver</button></a>
                        </div>
                    </div>
                </div>
            </div>
            
                ";

            }
        ?>
        </div>
</div>

  <br>

  <div class="container">
    <p>Precisa de ajuda com alguma coisa relacionada a pataforma ? por favor contactar o suporte.</p>
  </div>
  
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

    function apagar(id) {
        alert(id);
    }

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