<?php

    session_start();
    include('conexao.php');

    $idcon=$_SESSION['id'];
    $idvei=$_POST['id'];
    $valor=$_POST['lvalor'];

    $sql = 'INSERT INTO lance (idcon, idcarro, valor ) VALUES(?, ?, ?)';

    $stmtCad = $con->prepare($sql);

    $stmtCad->bindParam(1, $idcon);
    $stmtCad->bindParam(2, $idvei);
    $stmtCad->bindParam(3, $valor);
    
    $stmtCad->execute();

    echo 'Cadastro efetuado com sucesso';
    header("location: concessionaria.php");
    
?>