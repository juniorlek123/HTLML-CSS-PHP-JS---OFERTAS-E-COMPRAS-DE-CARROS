<?php

    session_start();
    include('conexao.php');

    $idVeiculo=$_POST['id'];
    $marca=$_POST['emarca'];
    $ano=$_POST['eano'];
    $valor=$_POST['evalor']; 

    $sql = ("UPDATE veiculos SET marca= ?, ano= ?, valor= ? WHERE id= ?");

    $stmtCad = $con->prepare($sql);
    $stmtCad->bindParam(1, $marca);
    $stmtCad->bindParam(2, $ano);
    $stmtCad->bindParam(3, $valor);
    $stmtCad->bindParam(4, $idVeiculo);

    $stmtCad->execute();


    echo 'Cadastro efetuado com sucesso';
    header("location: anunciante.php");
    
?>