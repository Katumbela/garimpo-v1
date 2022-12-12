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
            <a class="navbar-brand text-white " href="./index.php">
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
            <a href="./index.php">Inicial</a>/ <a href="">Estudantes</a>
            <hr>
        </div>
        <br>

        
        <div>

        <?php
              $get_c = "SELECT *  FROM cadastro";
              $con_e = $conexao->query($get_c);
              $quantos_c = mysqli_num_rows($con_e);
        ?>

            <h3>Conheça todos os estudantes cá presente ( <?=$quantos_c?> )</h3>
            <div style="width: 4rem; height: .3rem; background: green; border-radius: 50px;"></div>
        </div>
        <br>

        <div class="casos d-flex gap-4 flex-wrap position-relative bg-light py-3 rounded-3 px-3">

            <?php
                $get_c = "SELECT *  FROM cadastro";
                $con_e = $conexao->query($get_c);
                $quantos_c = mysqli_num_rows($con_e);
                while($dados_e = mysqli_fetch_array($con_e)){

                    

                $quem = $dados_e['nome'];
                $foto = $dados_e['foto_perfil'];
                $curso = $dados_e['curso'];
                $ano = $dados_e['ano'];
                $quando = $dados_e['quando'];
                $num = $dados_e['numero'];
                $sala = $dados_e['sala'];
                $id = $dados_e['id'];
                $hab = $dados_e['habilidades'];
                $tel = $dados_e['telefone'];
                $encoded_id = base64_encode($id);
                $who = base64_encode(base64_encode(base64_encode($num)));

                ?>


            <div class="d-flex py-3 w-100-c py-md-3 shadow justify-content-between p-3 rounded-3" style="background: #effdefcd">
                <div class="d-flex gap-2">
                    <div class="my-auto foto">
                        <img src="perf_pics/<?=$foto?>" style="border: 2px solid green" height="50em" width="50em" class="my-auto rounded-circle" alt="">
                    </div>
                    <div class="dados" style="display: flex; flex-direction: column">
                        <b class="text-success"><?=$quem?></b>
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
                <div class="botaos my-auto">
                    <a href="profile.php?w=<?=$who?>">
                        <button class="btn btn-success">
                            <!-- Generated by IcoMoon.io -->
                            <svg fill="white" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 64 64">
                            <title>Visualizar</title>
                            <path d="M32 18.116c0 0-0 0-0 0-7.132 0-12.914 5.782-12.914 12.914s5.782 12.914 12.914 12.914c7.132 0 12.914-5.782 12.914-12.914v0c-0.008-7.129-5.785-12.905-12.913-12.914h-0.001zM32 39.943c0 0-0 0-0 0-4.923 0-8.914-3.991-8.914-8.914s3.991-8.914 8.914-8.914c4.923 0 8.914 3.991 8.914 8.914v0c-0.006 4.921-3.993 8.908-8.913 8.914h-0.001z"></path>
                            <path d="M49.653 16.388l-0.027-0.028c-9.719-9.719-25.532-9.719-35.251 0l-12.374 12.864v3.612l12.374 12.864c4.511 4.511 10.742 7.301 17.625 7.301s13.115-2.79 17.625-7.301v0l12.374-12.864v-3.612zM58 31.224l-11.217 11.661c-3.785 3.779-9.012 6.116-14.783 6.116s-10.998-2.337-14.784-6.116l0 0-11.217-11.661v-0.388l11.216-11.66c8.156-8.141 21.412-8.141 29.568 0l11.216 11.66z"></path>
                            <path d="M30 29h4v4h-4v-4z"></path>
                            </svg>
                        </button>
                    </a>
                </div>

            </div>

    <?php
                }
            ?>
            </div>
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
