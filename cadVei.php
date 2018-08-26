<?php

    session_start();
    include('conexao.php');

    $idCliente=$_SESSION['id'];
    $marca=$_POST['marca'];
    $ano=$_POST['ano'];
    $valor=$_POST['valor']; 
    $situaçao='VENDER';

    $sql = 'INSERT INTO VEICULOS (idcliente,  marca, ano, valor, situaçao) VALUES(?, ?, ?, ?, ?)';

    $stmtCad = $con->prepare($sql);

    $stmtCad->bindParam(1, $idCliente);
    $stmtCad->bindParam(2, $marca);
    $stmtCad->bindParam(3, $ano);
    $stmtCad->bindParam(4, $valor);
    $stmtCad->bindParam(5, $situaçao);
    

    $stmtCad->execute();

    echo 'Cadastro efetuado com sucesso';
    header("location: anunciante.php");
    
?>