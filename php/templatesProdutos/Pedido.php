<!DOCTYPE html>
<html>
    <head>
        <script src="../../js/linkagem_entre_paginas.js" type="text/javascript"></script>
        <link href="../../css/estiloPaginaCarrinho.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        session_start('Carrinho');

//Conexao Banco de Dados
        include "../ConectaAlmoxarifado.php";

        $queryLinhas = mysql_query("SELECT  * FROM fornecedor, estoque "
                . "WHERE for_cod = est_for order by 1");

        $tamIndices = mysql_num_rows($queryLinhas); //Pegar o tamanho do result pra aplicar como indice
//Pegar todos os que estão inseridos no carrinho
        $x = 0;
        $codStr = "";
        $ProdutoSetado = 0; //n sei como usar, para caso n tenha nenhum produto selecionado
        $precoTotalCompra = 0;
        
        $mensagem = ""; //Mensagem total
        for ($x = 0; $x < $tamIndices; $x++) {
            $codstr = "cod_" . $x;
            $nomestr = "nome_" . $x;
            $qtdereqstr = "QtdeReq_" . $x;
            $preco = "preco_" . $x;
            $precoTotalProduto = "precoTotal_" . $x;

            if (isset($_POST[$precoTotalProduto])) {
                $precoProduto = $_POST[$precoTotalProduto];

                $precoTotalCompra = $precoTotalCompra + $precoProduto;
            }

            // Verifica se a variável $_POST[] existe
            if (isset($_POST[$codstr])) {
                // Verifica se o usuário digitou o seu nome
                if (!empty($_POST[$codstr])) {
                    $_SESSION['Carrinho']['CarCodigo' . $x] = $_POST[$codstr];
                    echo "Codigo do produto: " . $_SESSION['Carrinho']['CarCodigo' . $x] . "<br>";
                }
            }
            if (isset($_POST[$nomestr])) {
                if (!empty($_POST[$nomestr])) {
                    $_SESSION['Carrinho']['CarNome' . $x] = $_POST[$nomestr];
                    echo "Nome do produto: " . $_SESSION['Carrinho']['CarNome' . $x] . "<br>";
                }
            }
            if (isset($_POST[$qtdereqstr])) {
                if (!empty($_POST[$qtdereqstr])) {
                    $_SESSION['Carrinho']['CarQtdeReq' . $x] = $_POST[$qtdereqstr];
                    $ProdutoSetado = 1;
                    echo "Quantidade Requerida: " . $_SESSION['Carrinho']['CarQtdeReq' . $x] . "<br>";
                }
            }

            if (isset($_POST[$preco])) {
                if (!empty($_POST[$preco])) {
                    $_SESSION['Carrinho']['CarPreco' . $x] = $_POST[$preco];
                    $_SESSION['Carrinho']['CarPrecoTotal' . $x] = $_POST[$precoTotalProduto];
                    $ProdutoSetado = 1;
                    echo "Preco unitario: " . $_SESSION['Carrinho']['CarPreco' . $x] . "<br>";
                    echo "Preco total do pedido: " . number_format($_SESSION['Carrinho']['CarPrecoTotal' . $x], 2, ',', '.') . "<br>";


                   
                }
            }



            //Logo dps de setar as sessões, retira do estoque
            if ((isset($_POST[$codstr])) && ($ProdutoSetado > 0)) { //esse produtoSetado n sei como usar
                $codigoCar = $_SESSION['Carrinho']['CarCodigo' . $x];
                $QtdeReqCar = $_SESSION['Carrinho']['CarQtdeReq' . $x];
                $sql = "UPDATE `estoque` SET `est_qtd` = `est_qtd` - $QtdeReqCar WHERE `estoque`.`est_cod` = $codigoCar";
                $qr = mysql_query($sql) or die(mysql_error());
                $ProdutoSetado = 0; // não sei se ta certo o uso disso, era só pra caso n tenha nenhum produto selecionado
                echo "";

                echo" __________________________________________________________________" . "<br>";
            }
            if (isset($_POST[$codstr])) {
                  //Enviar Por Email / incrementar cada produto
                    $mensCada = " __________________________________________________________________" . "\n".
                                "Nome do Produto: " . $_SESSION['Carrinho']['CarNome' . $x] . "\n" .
                                "Qtde Comprada: " . $_SESSION['Carrinho']['CarQtdeReq' . $x] . "\n" .
                                "Preço do Produto: " .$_SESSION['Carrinho']['CarPreco' . $x] ."\n".
                                " __________________________________________________________________" . "\n\n";
                    $mensagem = $mensagem . $mensCada;  
            }
        }
        $mensagem = $mensagem . "<br><br>Preço Total da Compra: R$ $precoTotalCompra";
        $sql = "select usu_Email from usuarios where usu_Usuario like '".$_COOKIE["nome_usuario"]."'";
                    $resultEmail = mysql_query($sql);
        
        $destino = mysql_result($resultEmail, 0, "usu_Email");
        $assunto = "Relatório da Compra";
        $enviaremail = mail($destino, $assunto, $mensagem);
        
        
        echo "<br>" . "O valor total do pedido e: R$ $precoTotalCompra" . "<br>";
        session_unset('Carrinho');
        mysql_close($conexao);
        ?>
        <div class = "DivVoltares">
            <input class="butao" type="button" onclick="VoltarPrincipalPHP()" Value="Menu Principal">
            <input class="butao" type="button" onclick="VoltarPedidoPHP()" Value="Novo Pedido">
        </div>
    </body>
</html>