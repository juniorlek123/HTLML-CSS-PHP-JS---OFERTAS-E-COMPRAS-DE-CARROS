$(document).ready(function(){


    $(document).on("click",".btnTeste", function()
    {
      Listar();

    });

    $(document).on("click",".btnNovo", function()
   {
     Mensagem($(this).html());
   });

});

function Listar()
{
    $("#listagem").empty();

    var lista = "";
    var cont = 0;

    $.post("listagem.php", {}, function(dados){
        $.each(dados, function(indice, dado){
            //alert(dado.nome);


                cont ++;


            if (cont % 2 == 0){
                lista += "<center><button class='btnTrue btnNovo'>";
            }
            else{
                lista += "<center><button class='btnFalse btnNovo'>";
            }

            lista += dado.nome;
            lista += "</button></center>";
        });

        $("#listagem").append(lista);

    },"json");
};


function Mensagem(texto)
{
    alert(texto);
}
