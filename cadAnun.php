<?php


    include('conexao.php');

    $nome=$_POST['nome'];
    $cnpj=$_POST['cnpj'];
    $tel=$_POST['tel'];
    $email=$_POST['email']; 
    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];
    
    $sql = 'INSERT INTO cadanun (nome,  cnpj, tel, email, usuario, senha ) VALUES(?, ?, ?, ?, ?, ?)';

    $stmtCad = $con->prepare($sql);

    $stmtCad->bindParam(1, $nome);
    $stmtCad->bindParam(2, $cnpj);
    $stmtCad->bindParam(3, $tel);
    $stmtCad->bindParam(4, $email);
    $stmtCad->bindParam(5, $usuario);
    $stmtCad->bindParam(6, $senha);

    $stmtCad->execute();

    echo 'Cadastro efetuado com sucesso';
    header("location: index.html");
    
?>