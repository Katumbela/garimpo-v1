
<?php
    session_start();
    require("./functions/con_db.php");
?>

<?php

if (isset($_SESSION['nome'])) {
    

$inserir = "SELECT * FROM cadastro WHERE numero='$num'";
$feito = $conexao -> query($inserir);
   $dados= mysqli_fetch_array($feito);
   $id = $dados['id'];
   $usuario = $dados['nome'];
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

}

else{
    echo "";
}

if(isset($_GET['w'])){
    $code = base64_decode(base64_decode(base64_decode($_GET['w'])));

    
    $inserir = "SELECT * FROM cadastro WHERE numero='$code'";
   $feito = $conexao -> query($inserir);
   $dados= mysqli_fetch_array($feito);
   $id = $dados['id'];
   $nome = $dados['nome'];
   $fb = $dados['fb'];
   $lin = $dados['lin'];
   $wp = $dados['wp'];
   $insta = $dados['insta'];
   $usuario_email = $dados['email'];
   $telefone = $dados['telefone'];
   $curso = $dados['curso'];
   $sala = $dados['sala'];
   $foto = $dados['foto_perfil'];
   $hab= $dados['habilidades'];
   
   $u_n1 = explode(" ", $nome);
   $usu_nome = $u_n1[0];

}

else{
    header("location: ./mates_on.php");
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudantes Cadastrados | Garimpo</title>
    <meta http-equiv="refresh" content="2000">
    <script src="./jquery.js"></script>
    <script src="https://use.fontawesome.com/9cc31301fc.js"></script>
    <script src="./jquery.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="./estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <script src="./js_files/notify.min.js"></script>
</head>
<style>
    .carousel {
        border-radius: 16px;
    }

    body {
        overflow-x: hidden;
    }

    .lead span {
        padding: 1rem;
    }

    .courses {
        display: none;
    }

    .way {
        font-size: 14px;
    }
    .font-bold{
        font-weight: bolder;
    }
    span{
        letter-spacing: 1px;
    }

    @media (max-width: 760px) {
        .w-100-c{
            width: 100%;
        }
    }
</style>

<body class="body bg-white">
    <nav class="navbar navbar-light" style="background: #047a04;">
        <div class="container">
            <a class="navbar-brand text-white " href="index.html">
                <!-- <img src="img/logo01.png" alt="" width="30" height="30"> -->
                Garimpo ISPT
            </a>
            <div>
                
            <a class="text-white" href="tel:+244946445629">&phone; Ajuda</a>

            <?php
            if (isset($_SESSION['nome'])) {
                
                ?>
                   <span class="text-white"> &middot;</span><a class="text-white mx-1" id="sair" style="cursor: pointer">sair</a><span class="text-white"> &middot;</span> <span class="mx-2 text-white"><?=$usu_nome?></span>
               
            <img src="./img/default.png" height="38em" class="rounded-circle" title="Meu perfil" style="border: 1px solid white; cursor: pointer" alt="">
             <?php

            }

            
          ?></div>
        </div>
    </nav>

    <main class="container">

        <br><br>
        <div class="way ">
            <a href="./index.html">Inicial</a>/ <a href="mates_on.php">Estudantes</a>/ <a> <?=$usu_nome?></a>
            <hr>
        </div>

        
        <div>

    </div>

        <div class="casos d-flex gap-4 flex-wrap position-relative bg-light py-3 rounded-3 px-3">

           


            <div class="d-flex w-100 py-3 w-100-c py-md-3 shadow justify-content-between p-3 rounded-3" style="background: #effdefcd">
                <div class="d-flex gap-2">
                    <div class="my-auto foto">
                        <img src="perf_pics/<?=$foto?>" style="border: 2px solid green" height="70em" width="70em" class="my-auto rounded-circle" alt="">
                    </div>
                    <div class="dados" style="display: flex; flex-direction: column">
                        <h4><b class="text-success"><?=$nome?></b></h4>
                        <span style="font-size: 10px"><?=$sala?> &middot; <?=$curso?></span>
                        <span style="font-size: 10px" class="d-flex"><?php 

                            $hab_s = explode(",", $hab);

                            for ($i=0; $i < count($hab_s); $i++) { 
                                ?>
                                <span class="p-1 me-2  rounded-pill " style="color: green; border: 1px solid green; background: #c4fec4cd; cursor:pointer; margin-top: .3rem">
                                    <?=$hab_s[$i];?>
                                </span>
                                <?php

                            }
                        ?></span>
                    </div>
                </div>
                <div class="botaos  my-auto" style="display: flex; flex-direction: column">
                  <!-- Generated by IcoMoon.io -->
                    <svg class="mx-auto" fill="green"  version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <title>Verificado</title>
                    <path d="M9.331 21.375l-0.346-0.352-0.185-0.183-4.040-4.041 0.002-0.003-3.922-3.922 4.576-4.576 3.917 3.917 9.341-9.341 4.576 4.576-9.869 9.874zM6.872 16.79l2.459 2.459 0.005-0.005 0.003 0.003 2.452-2.452 0.528-0.533 8.811-8.811-2.454-2.454-9.341 9.341-3.917-3.917-2.454 2.454 3.912 3.912z"></path>
                    </svg>
                    <spa class="text-success" style="font-size: 10px">Verificado</span>

                </div>

            </div>
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
        <a style="font-size: 12px" href="./login.html">Fazer login</a>
        
        <?php
  }

?>
            </div>

</div>
      

            <br>
            <center>
                <img src="./img/ispt.jfif" style="opacity: .2" alt="">
            </center>
    </main>

    <br>
    <br>
    <hr>
    <br>
    <br>


    <footer class="text-center text-white" style="">
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-start text-white py-4 px-3" style="background-color: green; font-size: 14px;">
            © 2022 Copyright -
            <a class="text-white my-auto text-decoration-none" href="http://angofreela.cf/"> Garimpo </a> &middot; <span class="mx-2">suporte: <a class=" text-white" href="tel:+244946445629">946 445 629</a></span> &middot; <span class="mx-2">Email: <a class="text-white" href="mailto:ja3328173@gmail.com">ja3328173@gmail.com</a></span>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>


    <script>


        $(".eng").click(function () {
            $(".courses").slideToggle("fast");
            $(".courses").toggleClass("d-flex");
        })


        
        $('#upload').click( function() {
            var file_data = $('#foto_caso').prop('files')[0];
            var id_user = $('#owner').val();
            var sala = $('#sala').val();
            var num = $('#num_est').val();
            var desc = $('#desc').val();
            var curso = "Eng. Eletrotécnica";
            var form_data = new FormData();
            form_data.append('file', file_data);
            form_data.append('owner', id_user);
            form_data.append('desc', id_user);
            form_data.append('num', num);
            form_data.append('sala', sala);
            form_data.append('curso', curso);

            if (file_data == null || desc == "") {
                $.notify("Adicione a foto do caso", "error");
                
            } else {

            var file_data = $('#foto_caso').prop('files')[0];
            var id_user = $('#owner').val();
            var sala = $('#sala').val();
            var num = $('#num_est').val();
            var desc = $('#desc').val();
            var curso = "Eng. Eletrotécnica";
            var form_data = new FormData();
            form_data.append('file', file_data);
            form_data.append('owner', id_user);
            form_data.append('desc', id_user);
            form_data.append('num', num);
            form_data.append('sala', sala);
            form_data.append('curso', curso);

                $.ajax({
                    url: './functions/functions.php', // <-- point to server-side PHP script 
                    dataType: 'text', // <-- what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function(php_script_response) {
                       desc.val("");
                       file_data.val("");
                $.notify("Problema adicionado com sucesso", "success"); // <-- display response from the PHP script, if any
                    }
                });
            }
        });


        setInterval(() => {
            $.get("./functions/get_ee_datas.php", function(res, req){
               $(".casos").html(res);
        
        });
        }, 1500);

    </script>

</body>

</html>
