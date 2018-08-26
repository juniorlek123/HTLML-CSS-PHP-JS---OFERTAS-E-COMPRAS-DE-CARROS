<?php

    session_start();
    include('conexao.php');

        
    $iddelete=$_GET['id'];

    $sql = 'DELETE FROM veiculos WHERE id = ?';
    $stmtCad = $con->prepare($sql);
    $stmtCad->bindParam(1, $iddelete);

    $stmtCad->execute();

    echo 'Cadastro efetuado com sucesso';

    echo 'Cadastro efetuado com sucesso';
    header("location: anunciante.php");
    
?>