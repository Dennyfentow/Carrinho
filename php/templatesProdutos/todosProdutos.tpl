<!DOCTYPE html>
<html>
    <head>
        <script src="../../js/pedidos.js" type="text/javascript"></script>
        <link href="../../css/estiloPaginaCarrinho.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="interfacePedido">
            [@content]
        </div>

        <!-- Botão Principal Para inserir e Deletar do Carrinho-->
        <input type="button" class="butao" onclick="carrinhoPrincipalIns()" value="Inserir"/> 
        <input type="button" class="butao" onclick="carrinhoPrincipalRem()" value="Remover"/>

        <h1>Carrinho de compras</h1>

        <form class="divCarrinho" name="formCarrinho" id="idCarrinho1" method="POST" action="Pedido.php">
            <input type="hidden" size="10" name="InicialJS"/>
            <input type="submit" class="butao" value="Realizar Pedido"/>
        </form>


        <!--<input type="button" onclick="addcriando('nome','1')" value="AddCriando"/>-->
        <script src="../../js/carregarChecks.js" type="text/javascript"></script>
    </body>
</html>