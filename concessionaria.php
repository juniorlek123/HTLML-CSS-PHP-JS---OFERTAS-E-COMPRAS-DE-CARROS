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
                <button class="btnSubMenu">Meus Lances</button>
                <button class="btnSubMenu"data-toggle="modal" data-target="#editDados" data-iddados="<?php echo $_SESSION['id'];?>" data-nome="<?php echo $_SESSION['nome'];?>" data-cnpj="<?php echo $_SESSION['cnpj'];?>" data-tel="<?php echo $_SESSION['tel'];?>" data-email="<?php echo $_SESSION['email'];?>" data-usuario="<?php echo $_SESSION['cadcliente']; ?>" >Ver meus dados</button> 
            </div>
        </div>
        <hr>
        <div class="limite">
        <ol>
            <table class="table">
                <tr>
                    <th class="ColumCodigoH">Codigo</th>
                    <th class="ColumSistemaH" >Marca/Modelo</th>
                    <th class="ColumUsuarioH">Ano</th>
                    <th class="ColumSenhaH">Valor</th>
                    <th class="ComplementoH"></th>
                </tr>
                <?php
                    include('conexao.php');
                     $sql = "SELECT * FROM veiculos";
                    $stmtListagem = $con->prepare($sql);
                    $stmtListagem->bindParam(1, $_SESSION['id']);
                    $stmtListagem->execute();
                    $listaUsuarios=$stmtListagem->fetchAll(PDO::FETCH_ASSOC);
                    
                foreach($listaUsuarios as $usuario)
                {
                    
                    echo '<tr>';
                    echo '<td class="ColumCodigo">'. $usuario['id']. '</td>';
                    echo '<td class="ColumSistema">'. $usuario['marca']. '</td>';
                    echo '<td class="ColumUsuario">'. $usuario['ano']. '</td>';
                    echo '<td class="ColumSenha">'. $usuario['valor']. '</td>';
                    echo '<td class="Complemento"><a><button class="btnEditar" href="" data-toggle="modal" data-target="#EditVei" data-whatever="'.$usuario['id'].'" data-whatevermarca="'.$usuario['marca'].'" data-whateverano="'.$usuario['ano'].'" data-whatevervalor="'.$usuario['valor'].'">Lance</button></a><a href="deleteVeiculo.php?id=' .$usuario['id'].'"></td>';
                    echo '<tr>';
                    
                    
                }
                
                ?>
                
            </table>
        </ol>
        </div>
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
                        <h1 class="fontCadA">Um Pouco Sobre Nossa História</h1>
                        <hr>
                        <p class="fontCadA">
                        O projeto do Vapor Cugnot Trolley (Jonathan Holguinisburg) (1769)
                        A história do automóvel tem início por volta de 1769, com a criação do motor a vapor de automóveis capazes de transportar humanos.[1]:14 Em 1807, os primeiros carros movidos por um motor de combustão interna a gás combustível apareceram, o que levou à introdução em 1885 do moderno motor a gasolina ou com combustão a gasolina onipresente interno.[2] 
                        O ano de 1886 é considerado o ano de nascimento do automóvel moderno - com o Benz Patent-Motorwagen, pelo inventor alemão Karl Benz.[3] 
                        Carros movidos a energia elétrica apareceram no século XX, mas praticamente desapareceram de uso até o século XXI. O início da história do automóvel pode ser dividido em um certo número de eras, com base nos meios comuns de propulsão. Períodos posteriores foram definidos por tendências de estilo exterior, tamanho e preferências de serviços públicos. 

                        Índice</p>
                       <hr>
                        <div class="cadAButton">
                            <button type="button" class="btCadAnun" data-dismiss="modal">Sair</button>
                        </div>
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
                        <h3 class="fontCadA">Entre em Contato</h3>
                        <hr>
                        <form name="formulario">
                            <div class="cademail">  
                                <label class="fontCadA">Nome</label>
                                <input type=text class="cemail" name="nome" size="45" required="" placeholder="Digite seu nome completo">
                            </div>
                            <br>
                            <div class="cademail">  
                                <label class="fontCadA">Telefone/Celular</label>
                                <input type=text class="cemail" name="nome" size="45" required="" placeholder="Digite seu nome completo">
                            </div>
                            <br>
                            <div class="cademail">  
                                <label class="fontCadA">Email</label>
                                <input type=text class="cemail" name="nome" size="45" required="" placeholder="Digite seu nome completo">
                            </div>
                            <br>
                            <div class="cademail">  
                                <label class="fontCadA">Assunto</label>
                                <input type=text class="cemail" name="nome" size="45" required="" placeholder="Digite seu nome completo">
                            </div>
                            <br>
                            <label class="fontCadA">Mensagem</label>
                            <textarea class="cemailmsg" name="Mensagem" rows="10" cols="60" wrap="virtual" placeholder="Digite sua mensagem"></textarea><br>
                            <hr>
                            <div class="cadAButton">
                                <input class="btnCadA" type="submit" name="" value="Enviar">
                                <button type="button" class="btCadAnun" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                    </div>             
                </div>                  
            </div>                
        </div>
        <div class="modal fade" id="EditVei" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">                
                <div class="modal-content">                       
                    <div class="modal-header"> 
                    <div class="modal-body">
                        <form class="CadAn" name="singnup" method="post" action="cadLance.php">
                            <h3 class="fontCadA">Cadastrar Veículo</h3>
                            <hr>
                            <div class="cadANome">
                                <input class="idEdit" name="id" id="id">
                                <label class="fontCadA">Marca/Modelo</label>
                                <input class="CadAnun" id="recpient-marca" type="text" name="emarca" placeholder="Digite aqui sua Razão Social" required="" value="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Ano</label>
                                <input class="CadAnun" id="recpient-ano" type="text" name="eano" placeholder="Digite aqui seu CNPJ" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Valor</label>
                                <input class="CadAnun" id="recpient-valor" type="text" name="evalor" placeholder="Digite aqui seu Telefone" required="">
                            </div>
                            <hr>
                            <h3 class="fontCadA">Lance no Veículo</h3>
                            <div class="cadANome">
                                <label class="fontCadA">Valor do Lance</label>
                                <input class="CadAnun" id="recpient-valor" type="text" name="lvalor" placeholder="Digite aqui seu Telefone" required="">
                            </div>
                            <br>
                            <hr>
                            <div class="cadAButton">
                                <input class="btnCadA" type="submit" name="" value="Lance">
                                <button type="button" class="btCadAnun" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                    </div>             
                </div>                  
            </div>               
        </div>
        <div class="modal fade" id="editDados" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">                
                <div class="modal-content">                       
                    <div class="modal-header"> 
                    <div class="modal-body">
                        <form class="CadAn" name="singnup" method="post" action="editAnunciante.php">
                            <h3 class="fontCadA">Alterar Meus Dados</h3>
                            <hr>
                            <div class="cadANome">
                                <input class="idEdit" name="idanunciante" id="ideditdados">
                                <label class="fontCadA">Nome Completo</label>
                                <input class="CadAnun" id="nomeedit" type="text" name="editnome" placeholder="Digite aqui seu nome completo" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">CPF</label>
                                <input class="CadAnun" id="cpfedit" type="text" name="editcpf" placeholder="Digite aqui seu CPF" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Telefone</label>
                                <input class="CadAnun" id="teledit" type="text" name="edittel" placeholder="Digite aqui seu Telefone" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Email</label>
                                <input class="CadAnun" id="emailedit" type="text" name="editemail"  placeholder="Digite aqui seu Email" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Nome de Usuário</label>
                                <input class="CadAnun" id="useredit" type="text" name="editusuario" placeholder="Digite aqui seu nome de Usuário" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Senha</label>
                                <input class="CadAnun" type="password" name="editsenha" placeholder="Digite aqui sua nova senha" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Confirmar Senha</label>
                                <input class="CadAnun" type="password" placeholder="Confirme sua senha" required="">
                            </div>
                            <br>
                            <hr>
                            <div class="cadAButton">
                                <input class="btnCadA" type="submit" name="" value="Salvar">
                                <button type="button" class="btCadAnun" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                    </div>             
                </div>                  
            </div>               
        </div>
        <script type="text/javascript">
        $('#EditVei').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var recipientmodelo = button.data('whatevermarca')
          var recipientano = button.data('whateverano')
          var recipientvalor = button.data('whatevervalor')
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('New message to ' + recipient)
          modal.find('#id').val(recipient)
          modal.find('#recpient-marca').val(recipientmodelo)
          modal.find('#recpient-ano').val(recipientano)
          modal.find('#recpient-valor').val(recipientvalor)
        })
        </script>
        
        <script type="text/javascript">
        $('#editDados').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var idmeudados = button.data('iddados') // Extract info from data-* attributes
          var editnome = button.data('nome') // Extract info from data-* attributes
          var editcpf = button.data('cnpj') // Extract info from data-* attributes
          var edittel = button.data('tel') // Extract info from data-* attributes
          var editemail = button.data('email') // Extract info from data-* attributes
          var editusuario = button.data('usuario') // Extract info from data-* attributes

          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('#ideditdados').val(idmeudados)
          modal.find('#nomeedit').val(editnome)
          modal.find('#cpfedit').val(editcpf)
          modal.find('#teledit').val(edittel)
          modal.find('#emailedit').val(editemail)
          modal.find('#useredit').val(editusuario)

        })
        </script>
        
    </body>
</html>