<?php

    session_start();
    include("conexao.php");

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario =='Admin' and $senha == 'adm123'){
        
         header("location: admin.php");
        
    }

    else{
    

        $sql = "SELECT * FROM cadcliente WHERE usuario = ? and senha = ?";
        $stmtLogar = $con->prepare($sql);
        $stmtLogar->bindParam(1, $usuario);
        $stmtLogar->bindParam(2, $senha);

        $stmtLogar->execute();

        $anunciante =  $stmtLogar->fetch(PDO::FETCH_ASSOC);
        $tipo = "Anunciante";

        if($anunciante['id']== ""){

            $sql = "SELECT * FROM cadanun WHERE usuario = ? and senha = ?";
            $stmtLogar = $con->prepare($sql);
            $stmtLogar->bindParam(1, $usuario);
            $stmtLogar->bindParam(2, $senha);

            $stmtLogar->execute();

            $anunciante =  $stmtLogar->fetch(PDO::FETCH_ASSOC);
            $tipo = "Concessionária";

            if($anunciante['id']== ""){

                echo "<script>alert('Usuário não cadastrado !!!');location.href=\"index.php\";</script>";

            }

            else{

            $_SESSION['cadcliente']= $usuario;
            $_SESSION['tipo']= $tipo;
            $_SESSION['id']= ($anunciante['id']);
            $_SESSION['nome']= ($anunciante['nome']);
            $_SESSION['cnpj']= ($anunciante['cnpj']);
            $_SESSION['tel']= ($anunciante['tel']);
            $_SESSION['email']= ($anunciante['email']);
            header("location: concessionaria.php");

            }

        }

        else{

            $_SESSION['cadcliente']= $usuario;
            $_SESSION['tipo']= $tipo;
            $_SESSION['id']= ($anunciante['id']);
            $_SESSION['nome']= ($anunciante['nome']);
            $_SESSION['cpf']= ($anunciante['cpf']);
            $_SESSION['tel']= ($anunciante['tel']);
            $_SESSION['email']= ($anunciante['email']);
            header("location: anunciante.php");

        }
        
    }
?>