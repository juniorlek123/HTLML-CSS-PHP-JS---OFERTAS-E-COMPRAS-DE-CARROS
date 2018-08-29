<?php

    include("conexao.php");


    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    


    $sql = "SELECT * FROM cadcliente WHERE cpf = ? and email = ?";
    $stmtLogar = $con->prepare($sql);

    $stmtLogar->bindParam(1, $cpf);
    $stmtLogar->bindParam(2, $email);
    

    $stmtLogar->execute();
        
    $anunciante =  $stmtLogar->fetch(PDO::FETCH_ASSOC);

    if($anunciante['id']== ""){
    
        $sql = "SELECT * FROM cadanun WHERE cnpj = ? and email = ?";
        $stmtLogar = $con->prepare($sql);
        
        $stmtLogar->bindParam(1, $cpf);
        $stmtLogar->bindParam(2, $email);

        $stmtLogar->execute();

        $anunciante =  $stmtLogar->fetch(PDO::FETCH_ASSOC);
        
        $senha = $anunciante['senha'];

        if($anunciante['id']== ""){

            echo "<script>alert('Os Dados digitados não conferem com nenhum registro');location.href=\"index.php\";</script>"; 

        }
        
        else{
            
        
            ini_set('display_errors', 1);

            error_reporting(E_ALL);

            $from = "testing @ yourdomain";

            $to = "$email";

            $subject = "Recuperação de Senha";

            $message = "Sua senha é: " .$senha;

            $headers = "De:". $from;

            mail($to, $subject, $message, $headers);

            echo "<script>alert('Email enviado com sucesso !!!');location.href=\"index.php\";</script>";
            
        }
        
    }
        
    else{
        
        ini_set('display_errors', 1);

            error_reporting(E_ALL);

            $from = "testing @ yourdomain";

            $to = "$email";

            $subject = "Recuperação de Senha";

            $message = "Sua senha é: " + "$senha";

            $headers = "De:". $from;

            mail($to, $subject, $message, $headers);

            echo "<script>alert('Email enviado com sucesso !!!');location.href=\"index.php\";</script>";
        
    }











?>