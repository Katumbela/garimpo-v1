<?php
    session_start();
    require("../functions/con_db.php");
?>

<?php

if (isset($_SESSION['num_est'])) {
    
    $num = $_SESSION['num_est'];

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
    <title>Engenharia Eletrotécnica - Garimpo</title>
    <meta http-equiv="refresh" content="2000">
    <script src="../jquery.js"></script>
    <script src="https://use.fontawesome.com/9cc31301fc.js"></script>
    <script src="../jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="../js_files/notify.min.js"></script>
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
</style>

<body class="body bg-white">
    <nav class="navbar navbar-light" style="background: #047a04;">
        <div class="container">
            <a class="navbar-brand text-white " href="../index.php">
                <!-- <img src="img/logo01.png" alt="" width="30" height="30"> -->
                Garimpo ISPT
            </a>
            <div>
                
            <a class="text-white" href="tel:+244946445629">&phone; Ajuda</a>

            <?php
            if (isset($_SESSION['nome'])) {
                
                ?>
                   <span class="text-white"> &middot;</span><a class="text-white mx-1" id="sair" style="cursor: pointer">sair</a><span class="text-white"> &middot;</span> <span class="mx-2 text-white"><?=$usu_nome?></span>
               
             <?php

            }

            
          ?></div>
        </div>
    </nav>

    <main class="container">

        <br><br>
        <div class="way ">
            <a href="../index.php">Inicial</a>/ <a href="">Engenharias</a>/ <a
                href="engenharia_eletrotecnica.php">Eng. Eletrotécnica</a>
            <hr>
        </div>
        <br>
        <h4>Procura uma solução ? <?php 
            if (isset($_SESSION['id'])) {
                
                ?> adicione aqui o seu problema <?php } else { ?><a href="login.php">faça login</a> ou <a href="cadastro.php">crie uma conta</a> <br> <p style="font-size: 12px" class="my-1">Ao criar uma conta você estará interagindo com o resto do pessoal do ISPT</p><?php } ?></h4>
        <br>
        <input type="hidden" name="" value="<?=$usuario?>" id="owner">
        <input type="hidden" name="" value="<?=$sala?>" id="sala">
        <input type="hidden" name="" value="<?=$num?>" id="num_est">
        <div class="row">
        <?php
            if (isset($_SESSION['nome'])) {
                
                ?>
                <div class="col-12">
                    <a href="../dashboard.php"><button class="btn btn-outline-success">Dashboard</button></a>
                </div>
            <div class="col-12 my-2 my-lg-0 my-md-2 my-sm-2 col-lg-4 col-md-4 col-sm-4 col-xl-4">
                <input type="file" name="" id="foto_caso" class="form-control w-100">
            </div>
            <div class="col-12 my-2 my-lg-0 my-md-2 my-sm-2 col-lg-6 col-md-6 col-sm-4 col-xl-6">
                <input type="text" name="" id="desc" placeholder="Descrição do problema" class="w-100 form-control">
            </div>
            <div class="col-12 my-2 my-lg-0 my-md-2 my-sm-2 col-lg-2 col-md-2 col-sm-4 col-xl-2">
                <button id="upload" class="btn btn-success w-100">Publicar</button>
            </div>
            <?php
            }
            else{
                echo "<br>";
            }

            $get_c = "SELECT *  FROM posts WHERE curso = 'Eng. Eletrotécnica'";
                $con_e = $conexao->query($get_c);
                $quantos_c = mysqli_num_rows($con_e);
            ?>
        </div>
        <hr>
        <br>

        <br>
        <div>


            <h3>Casos disponíveis ( <?=$quantos_c?> )</h3>
            <div style="width: 4rem; height: .3rem; background: green; border-radius: 50px;"></div>
        </div>
        <br>

        <div class="casos row py-3 rounded-3 px-3">

            <?php
                $get_c = "SELECT *  FROM posts WHERE curso = 'Eng. Eletrotécnica'";
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
    $encoded_id =  base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($id)))));

    
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
                            <img src='../perf_pics/{$foto_perf}' style='height: 3em; width: 3.5em; border: 1px solid green ' title='{$quem}' class='rounded-circle my-auto'
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
                                <a href='../eng_pics/{$foto}'>
                                    <div class='w-100' style='background: url(../eng_pics/{$foto}) center center; height: 9rem; background-size: cover; box-shadow: inset -1px 1px 7px green;'></div>
                                </a>
                            </div>
                            <div style=' font-size: 13px;' class='desc_caso w-100'>
                                <br>
                                <p>Preciso de bater esse caso para o pessoal da minha turma, é caso de física e precisa ser
                                    entregue até o dia 12 deste mês</p>
                            </div>
                            
                            <div style='text-align: right '>
                                <a href='solve_case.php?c={$encoded_id}'><button style='' class='btn btn-outline-success rounded-pill'>Resolver</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                    ";

                }
            ?>
           <!--
            <div class="col-12 my-4 my-lg-0 my-md-2 my-sm-2 my-4 my-lg-3 my-md-2 my-sm-2 col-md-6 col-lg-4">
                <div class="quad p-3 rounded-2 shadow">
                    <div style="border-bottom: #047a0420 1px solid; padding-bottom: .5rem" class="head d-flex w-100">
                        <img src="../img/me.jpg" height="44em" title="Joao Afonso Katombela" class="rounded-circle my-auto"
                            style="border: 1px solid green" alt="">
                        <div class="datas w-100 my-auto ms-2" style="letter-spacing:1px!important">
                            <span class=" text-success font-bold" style="letter-spacing:1px!important">João Afonso Katombela</span><br>
                            <span
                                style="font-size: 10px; margin-top: -.5rem!important; letter-spacing:1px!important">12/MA
                                - Eng. Elet.</span>
                        </div>
                    </div>
                  
                    <p class="my-2" style="font-size: 10px; color: rgba(0, 128, 0, 0.604);">Clique na foto para ver
                        melhor</p>

                    <div class="corpo">
                        <div class="img_caso">
                            <a href="../img/cores.jpg">
                                <div class="w-100" style="background: url(../img/cores.jpg) center center; height: 9rem; background-size: cover; box-shadow: inset -1px 1px 7px green;"></div>
                            </a>
                        </div>
                        <div style=" font-size: 13px;" class="desc_caso w-100">
                            <br>
                            <p>Preciso de bater esse caso para o pessoal da minha turma, é caso de física e precisa ser
                                entregue até o dia 12 deste mês</p>
                        </div>
                        
                        <div style="text-align: right ">
                            <button style="" class="btn btn-outline-success rounded-pill">Resolver</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 my-4 my-lg-3 my-md-2 my-sm-2 col-md-6 col-lg-4">
                <div class="quad p-3 rounded-2 shadow">
                    <div style="border-bottom: #047a0420 1px solid; padding-bottom: .5rem" class="head d-flex w-100">
                        <img src="../img/me.jpg" height="44em" title="Joao Afonso Katombela" class="rounded-circle my-auto"
                            style="border: 1px solid green" alt="">
                        <div class="datas w-100 my-auto ms-2" style="letter-spacing:1px!important">
                            <span class=" text-success font-bold" style="letter-spacing:1px!important">João Afonso Katombela</span><br>
                            <span
                                style="font-size: 10px; margin-top: -.5rem!important; letter-spacing:1px!important">12/MA
                                - Eng. Elet.</span>
                        </div>
                    </div>
                               <p class="my-2" style="font-size: 10px; color: rgba(0, 128, 0, 0.604);">Clique na foto para ver
                        melhor</p>

                    <div class="corpo">
                        <div class="img_caso">
                            <a href="../img/quadro.jpg">
                                <div class="w-100" style="background: url(../img/quadro.jpg) center center; height: 9rem; background-size: cover; box-shadow: inset -1px 1px 7px green;"></div>
                            </a>
                        </div>
                        <div style=" font-size: 13px;" class="desc_caso w-100">
                            <br>
                            <p>Preciso de bater esse caso para o pessoal da minha turma, é caso de física e precisa ser
                                entregue até o dia 12 deste mês</p>
                        </div>
                        
                        <div style="text-align: right ">
                            <button style="" class="btn btn-outline-success rounded-pill">Resolver</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 my-4 my-lg-3 my-md-2 my-sm-2 col-md-6 col-lg-4">
                <div class="quad p-3 rounded-2 shadow">
                    <div style="border-bottom: #047a0420 1px solid; padding-bottom: .5rem" class="head d-flex w-100">
                        <img src="../img/me.jpg" height="44em" title="Joao Afonso Katombela" class="rounded-circle my-auto"
                            style="border: 1px solid green" alt="">
                        <div class="datas w-100 my-auto ms-2" style="letter-spacing:1px!important">
                            <span class=" text-success font-bold" style="letter-spacing:1px!important">João Afonso Katombela</span><br>
                            <span
                                style="font-size: 10px; margin-top: -.5rem!important; letter-spacing:1px!important">12/MA
                                - Eng. Elet.</span>
                        </div>
                    </div>
                  
                    <p class="my-2" style="font-size: 10px; color: rgba(0, 128, 0, 0.604);">Clique na foto para ver
                        melhor</p>

                    <div class="corpo">
                        <div class="img_caso">
                            <a href="../img/quadro.jpg">
                                <div class="w-100" style="background: url(../img/quadro.jpg) center center; height: 9rem; background-size: cover; box-shadow: inset -1px 1px 7px green;"></div>
                            </a>
                        </div>
                        <div style=" font-size: 13px;" class="desc_caso w-100">
                            <br>
                            <p>Preciso de bater esse caso para o pessoal da minha turma, é caso de física e precisa ser
                                entregue até o dia 12 deste mês</p>
                        </div>
                        
                        <div style="text-align: right ">
                            <button style="" class="btn btn-outline-success rounded-pill">Resolver</button>
                        </div>
                    </div>
                </div>
            </div>--> 
        </div>
    </main>

    <textarea name="" id="desc" cols="30" rows="2" class="form-control w-100" placeholder="Descricao do problema"></textarea>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <div class="dados flex-wrap d-flex justify-content-around container text-success">
        <h3><?=$quantos_c?> casos</h3>
        <h3>0 Solved</h3>
        <h3>5+ Estudantes</h3>
    </div>
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
                    url: '../functions/functions.php', // <-- point to server-side PHP script 
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
            $.get("../functions/get_ee_datas.php", function(res, req){
               $(".casos").html(res);
        
        });
        }, 1500);

        

    $("#sair").click(function () {
        location.href = "../functions/sair.php";
    })
    </script>

</body>

</html>