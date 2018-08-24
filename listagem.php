<?php

    $con = new PDO("mysql:host=localhost;dbname=listagem","root","");
    $con->exec("set names utf8");

    $sql = "SELECT * FROM usuarios order BY nome";

    $stmtListar = $con->prepare($sql);

    $stmtListar->execute();

    $listaUsuarios = $stmtListar->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($listaUsuarios);

?>
