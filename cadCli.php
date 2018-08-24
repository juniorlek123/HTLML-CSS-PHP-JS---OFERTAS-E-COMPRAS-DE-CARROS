<?php


    include('conexao.php');

    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $tel=$_POST['tel'];
    $email=$_POST['email']; 
    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];

    $sql = 'INSERT INTO cadCliente (nome,  cpf, tel, email, usuario, senha ) VALUES(?, ?, ?, ?, ?, ?)';

    $stmtCad = $con->prepare($sql);

    $stmtCad->bindParam(1, $nome);
    $stmtCad->bindParam(2, $cpf);
    $stmtCad->bindParam(3, $tel);
    $stmtCad->bindParam(4, $email);
    $stmtCad->bindParam(5, $usuario);
    $stmtCad->bindParam(6, $senha);
    

    $stmtCad->execute();

    echo 'Cadastro efetuado com sucesso';
    header("location: index.html");
    
?>