<?php

    session_start();
    include('conexao.php');

    $idanun=$_POST['idanunciante'];
    $nome=$_POST['editnome'];
    $cpf=$_POST['editcpf'];
    $tel=$_POST['edittel'];
    $email=$_POST['editemail']; 
    $usuario=$_POST['editusuario'];
    $senha=$_POST['editsenha'];

    $sql = ("UPDATE cadcliente SET nome= ?, cpf= ?, tel= ?, email= ?, usuario= ?, senha= ? WHERE id= ?");

    $stmtCad = $con->prepare($sql);
    $stmtCad->bindParam(1, $nome);
    $stmtCad->bindParam(2, $cpf);
    $stmtCad->bindParam(3, $tel);
    $stmtCad->bindParam(4, $email);
    $stmtCad->bindParam(5, $usuario);
    $stmtCad->bindParam(6, $senha);
    $stmtCad->bindParam(7, $idanun); 

    $stmtCad->execute();

    echo 'Cadastro efetuado com sucesso';
    header("location: logout.php");
    
?>