<html>
    <head>
        
        <?php
        
        session_start();
        
        if (isSet($_SESSION['tipo'])){
            
            if($_SESSION['tipo'] == 'Anunciante')
            {
                header("location: anunciante.php");
            }
            
            if($_SESSION['tipo'] == 'Concessionária')
            {
                header("location: anunciante.php");
            }
            
            if($_SESSION['tipo'] == 'Admin')
            {
                header("location: anunciante.php");
            }
            
        }
        
        
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
                    <button class="btnMenu" href="index.html"><img class="icon" src="img/home.png"><h3>Início</h3></button>
                    <button class="btnMenu" data-toggle="modal" data-target="#sobre"><img class="icon" src="img/info.png"><h3>Sobre Nós</h3></button>
                    <button class="btnMenu" data-toggle="modal" data-target="#contato"><img class="icon" src="img/contato.png"><h3>Contato</h3></button>
                    <button class="btnMenu" href="index.html"><img class="icon" src="img/FAQ.png"><h3>FAQ</h3></button>
                </div>    
            </nav>
        </div>
        <div class="box">
            <h2>Login no Sistema</h2>
            <form name="singnup" method="post" action="verifica.php">
                <div class="inputBox">
                    <input type="text" name="usuario" required="">
                    <label class="nomeUser">Nome de Usuário</label>
                </div>
                 <div class="inputBox">
                    <input type="password" name="senha" required="">
                    <label class="SenhaUser">Senha de Acesso</label>
                </div>
                <input class="btnEntrar" type="submit" name="" value="Entrar">
                <button type="button" class="btnEsqueci" name="" data-toggle="modal" data-target="#Esqueci">Esqueci Minha Senha</button>
                <br>
                <hr>
                <center><button class="btnCadA" type="button" name="" value="" data-toggle="modal" data-target="#cadA">Cadastrar-se Como Anunciante</button></center>
                <br>
                <center><button class="btnCadC" type="button" name="" value="" data-toggle="modal" data-target="#cadC">Cadastrar-se Como Concessionária</button></center>
            </form>
        </div>
        <footer class="rodape">
            <center><h5>© 2018 - Desenvolvido por José Paulo de Oliveira Junior</h5></center>
        </footer>
        <div class="modal fade" id="cadA" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">                
                <div class="modal-content">                       
                    <div class="modal-header"> 
                    <div class="modal-body">
                        <form class="CadAn" name="singnup" method="post" action="cadCli.php">
                            <h3 class="fontCadA">Cadastrar Anunciante</h3>
                            <hr>
                            <div class="cadANome">
                                <label class="fontCadA">Nome Completo</label>
                                <input class="CadAnun" type="text" name="nome" placeholder="Digite aqui seu nome completo" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">CPF</label>
                                <input class="CadAnun" type="text" name="cpf" placeholder="Digite aqui seu CPF" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Telefone</label>
                                <input class="CadAnun" type="text" name="tel" placeholder="Digite aqui seu Telefone" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Email</label>
                                <input class="CadAnun" type="text" name="email"  placeholder="Digite aqui seu Email" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Nome de Usuário</label>
                                <input class="CadAnun" type="text" name="usuario" placeholder="Digite aqui seu nome de Usuário" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Senha</label>
                                <input class="CadAnun" type="text" name="senha" placeholder="Digite aqui sua senha" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Confirmar Senha</label>
                                <input class="CadAnun" type="text" placeholder="Confirme sua senha" required="">
                            </div>
                            <br>
                            <hr>
                            <div class="cadAButton">
                                <input class="btnCadA" type="submit" name="" value="Cadastrar">
                                <button type="button" class="btCadAnun" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                    </div>             
                </div>                  
            </div>               
        </div>
        <div class="modal fade" id="cadC" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">                
                <div class="modal-content">                       
                    <div class="modal-header"> 
                    <div class="modal-body">
                        <form class="CadAn" name="singnup" method="post" action="cadAnun.php">
                            <h3 class="fontCadA">Cadastrar Concessionária</h3>
                            <hr>
                            <div class="cadANome">
                                <label class="fontCadA">Razão Social</label>
                                <input class="CadAnun" type="text" name="nome" placeholder="Digite aqui sua Razão Social" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">CNPJ</label>
                                <input class="CadAnun" type="text" name="cnpj" placeholder="Digite aqui seu CNPJ" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Telefone</label>
                                <input class="CadAnun" type="text" name="tel" placeholder="Digite aqui seu Telefone" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Email</label>
                                <input class="CadAnun" type="text" name="email"  placeholder="Digite aqui seu Email" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Nome de Usuário</label>
                                <input class="CadAnun" type="text" name="usuario" placeholder="Digite aqui seu nome de Usuário" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Senha</label>
                                <input class="CadAnun" type="text" name="senha" placeholder="Digite aqui sua senha" required="">
                            </div>
                            <br>
                            <div class="cadANome">
                                <label class="fontCadA">Confirmar Senha</label>
                                <input class="CadAnun" type="text" placeholder="Confirme sua senha" required="">
                            </div>
                            <br>
                            <hr>
                            <div class="cadAButton">
                                <input class="btnCadA" type="submit" name="" value="Cadastrar">
                                <button type="button" class="btCadAnun" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                    </div>             
                </div>                  
            </div>               
        </div>
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