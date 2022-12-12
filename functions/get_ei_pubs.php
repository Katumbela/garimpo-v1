<?php
require("con_db.php");

$sql = "SELECT * FROM posts WHERE curso = 'Eng. Eletrotécnica'";
$con = $conexao->query($sql);

$pubs = "";

while($dados = mysqli_fetch_assoc($con)){

    $quem = $dados['quem'];
    $foto = $dados['foto'];
    $curso = $dados['curso'];
    $desc = $dados['descricao'];
    $quando = $dados['quando'];
    $num = $dados['numero'];
    $quem = $dados['quem'];

    
    $sql_c = "SELECT * FROM cadastro WHERE numero = '$num'";
    $con_c = $conexao->query($sql_c);
    $dad_c = mysqli_fetch_array($con_c);
    $sala = $dad_c['sala'];
    $foto_perf = $dad_c['foto_perfil'];
    $curso_prop = $dad_c['curso'];

    $pubs .= "
    
    <div class='col-12 my-4 my-lg-0 my-md-2 my-sm-2 my-4 my-lg-3 my-md-2 my-sm-2 col-md-6 col-lg-4'>
    <div class='quad p-3 rounded-2 shadow'>
        <div style='border-bottom: #047a0420 1px solid; padding-bottom: .5rem' class='head d-flex w-100'>
            <img src='../profile_pics/{$foto_perf}' style='height: 3em; width: 3.5em; border: 1px solid green ' title='{$quem}' class='rounded-circle my-auto'
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
                <button style='' class='btn btn-outline-success rounded-pill'>Resolver</button>
            </div>
        </div>
    </div>
</div>

    ";
}

echo $pubs;


?>