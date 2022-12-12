<?php

require('con_db.php');

    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        $owner = $_POST['owner'];
        $sala = $_POST['sala'];
        $curso = $_POST['curso'];
        $num = $_POST['num'];
        $desc = $_POST['desc'];
        $foto = $_FILES['file']['name'];
        $sql = "INSERT INTO posts(foto, descricao, quem, numero, curso, obs) VALUES('$foto','$desc','$owner','$num','$curso','Publicacao de teste')";
        $conn = $conexao->query($sql);
        move_uploaded_file($_FILES['file']['tmp_name'], '../eng_pics/' . $_FILES['file']['name']);
        echo json_encode("Sua foto foi alterada com sucesso!");
    }

?>