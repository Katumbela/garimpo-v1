<?php

require('con_db.php');

        $id = $_POST['id'];
        $insta = $_POST['insta'];
        $wp = $_POST['wp'];
        $fb = $_POST['fb'];
        $link = $_POST['link'];

        $sql = "UPDATE `cadastro` SET `fb` = '$fb' WHERE `cadastro`.`id` = '$id'";
        $conn = $conexao->query($sql);
        $sql1 = "UPDATE `cadastro` SET `lin` = '$link' WHERE `cadastro`.`id` = '$id'";
        $conn1 = $conexao->query($sql1);
        $sql2 = "UPDATE `cadastro` SET `insta` = '$insta' WHERE `cadastro`.`id` = '$id'";
        $conn2 = $conexao->query($sql2);
        $sql3 = "UPDATE `cadastro` SET `wp` = '$wp' WHERE `cadastro`.`id` = '$id'";
        $conn3 = $conexao->query($sql3);

?>