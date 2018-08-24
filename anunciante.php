<html>
    <head>
        
        <?php
        session_start();
        ?>
        
        <meta charset="utf-8">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/index.js"></script>
        <link rel="stylesheet" href="Estilo/index.css">
        <title>Car Anúncios</title>
    </head>
    <body>
        <div class="menu">
            <nav>
               <div class="row">
                    <button class="btnMenu"><img class="icon" src="img/home.png"><h3>Início</h3></button>
                    <button class="btnMenu" data-toggle="modal" data-target="#sobre"><img class="icon" src="img/info.png"><h3>Sobre Nós</h3></button>
                    <button class="btnMenu" data-toggle="modal" data-target="#contato"><img class="icon" src="img/contato.png"><h3>Contato</h3></button>
                    <button class="btnMenu" href="index.html"><img class="icon" src="img/FAQ.png"><h3>FAQ</h3></button>
                    <a href="logout.php"> <button class="btnMenu"><img class="icon" src="img/sair.png"><h3>Deslogar</h3></button></a>
                </div>    
            </nav>
        </div>
        <div class="acesso">
            <div class="row" id="rowacesso">
                <label class="acesso">Seja Bem Vindo:</label>
                <label class="acesso"><?php echo $_SESSION['cadcliente'];?></label>
                <label class="acesso">| Você está logado como: </label>
                <label class="acesso"><?php echo $_SESSION['tipo'];?></label>
            </div>
        </div>
        <br>
        <div class="mnuAnun">
            <div class="row">
                <button class="btnSubMenu">Cadastrar Veículo</button>
                <button class="btnSubMenu">Ver minhas Transações</button>
                <button class="btnSubMenu">Ver meus dados</button>
            </div>
        </div>
        <hr>
        <ol>
            <table class="table">
                <tr>
                    <th class="ColumCodigo">Codigo</th>
                    <th class="ColumSistema" >Sistema/Site</th>
                    <th class="ColumUsuario">Usuário</th>
                    <th class="ColumSenha">Senha</th>
                    <th class="Complemento"></th>
                </tr>
                <?php
                    include('Conexao1.php');
                    $sql = "SELECT * FROM senhas";
                    $stmtListagem = $con->prepare($sql);
                    $stmtListagem->execute();
                    $listaUsuarios=$stmtListagem->fetchAll(PDO::FETCH_ASSOC);
                    
                foreach($listaUsuarios as $usuario)
                {
                    
                    echo '<tr>';
                    echo '<td class="ColumCodigo">'. $usuario['codigo']. '</td>';
                    echo '<td class="ColumSistema">'. $usuario['sistema']. '</td>';
                    echo '<td class="ColumUsuario">'. $usuario['usuario']. '</td>';
                    echo '<td class="ColumSenha">'. $usuario['senha']. '</td>';
                    echo '<td class="Complemento"><a href="aqui_vai_link_para_atualiza_com_id_do_registro"><button class="btn btn-primary">Update</button></a><a href="aqui_vai_link_para_excluir_com_id_do_registro"><button class="btn btn-danger">Delete</button></td>';
                    echo '<tr>';
                    
                }
                
                ?>
                
            </table>
        </ol>
        <footer class="rodape">
            <center><h5>© 2018 - Desenvolvido por José Paulo de Oliveira Junior</h5></center>
        </footer>
        <div class="modal fade" id="Esqueci" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">                
                <div class="modal-content">                       
                    <div class="modal-header"> 
                    <div class="modal-body">
                        <form name="esquecis">
                            <h3>Esqueci Minha Senha</h3>
                            <div class="cadANome">
                                <label>CPF/CNPJ</label>
                                <input class="CadAnun" type="text" placeholder="Digite aqui seu CPF/CNPJ" required="">
                            </div>
                            <div class="cadANome">
                                <label>Email</label>
                                <input class="CadAnun" type="text" placeholder="Digite aqui seu Email" required="">
                            </div>
                            <hr>
                            <input class="btnCadastrar" type="submit" name="" value="Enviar">
                            <button type="button" class="btCadAnun" data-dismiss="modal">Cancelar</button>
                        </form>
                    </div>
                    </div>             
                </div>                  
            </div>               
        </div>
        <div class="modal fade" id="sobre" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">                
                <div class="modal-content">                       
                    <div class="modal-header"> 
                    <div class="modal-body">
                        <h1>Um Pouco Sobre Nossa História</h1>
                        <p>
                        O projeto do Vapor Cugnot Trolley (Jonathan Holguinisburg) (1769)
                        A história do automóvel tem início por volta de 1769, com a criação do motor a vapor de automóveis capazes de transportar humanos.[1]:14 Em 1807, os primeiros carros movidos por um motor de combustão interna a gás combustível apareceram, o que levou à introdução em 1885 do moderno motor a gasolina ou com combustão a gasolina onipresente interno.[2] 
                        O ano de 1886 é considerado o ano de nascimento do automóvel moderno - com o Benz Patent-Motorwagen, pelo inventor alemão Karl Benz.[3] 
                        Carros movidos a energia elétrica apareceram no século XX, mas praticamente desapareceram de uso até o século XXI. O início da história do automóvel pode ser dividido em um certo número de eras, com base nos meios comuns de propulsão. Períodos posteriores foram definidos por tendências de estilo exterior, tamanho e preferências de serviços públicos. 

                        Índice</p>
                                                <hr>
                        <button type="button" class="btCadAnun" data-dismiss="modal">Fechar</button>
                    </div>
                    <div class="modal-footer">
                    </div>
                    </div>             
                </div>                  
            </div>               
        </div>
        <div class="modal fade" id="contato" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">                
                <div class="modal-content">                       
                    <div class="modal-header"> 
                    <div class="modal-body">
                        <h3>Entre em Contato</h3>
                        <form name="formulario">
                            <p><b>Nome:</b><br>
                            <input type=text name="nome" size="45" required="" placeholder="Digite seu nome completo"></p><br>
                            <p><b>Email:</b><br>
                            <input type=text name="email" size="45" required="" placeholder="Digite seu Email"></p><br>
                            <p><b>Assunto:</b><br>
                            <input type=text name="assunto" size="45" required="" placeholder="Digite o assunto"></p><br>
                            <p><b>Mensagem:</b><br>
                            <textarea name="Mensagem" rows="10" cols="60" wrap="virtual" placeholder="Digite sua mensagem"></textarea></p><br>
                            <p><input type="submit" value="Enviar Email"> <input type="reset" value="Limpar Formulário"> <button type="button" class="btCadAnun" data-dismiss="modal">Cancelar</button></p>
                        </form>
                    </div>
                    </div>             
                </div>                  
            </div>                
        </div>
    </body>
</html>