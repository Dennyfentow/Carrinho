<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include "valida_cookies.php";
?>
<html>
    <head>
        <title>Realizar Pedido</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/arrumaTamIframe.css" rel="stylesheet" type="text/css"/>
        <script src="../js/loginLogout.js" type="text/javascript"></script>
        <script src="../js/linkagem_entre_paginas.js" type="text/javascript"></script>
        <link rel="shortcut icon" href="../ico/favicon.ico"/>
        <link rel="icon" type="image/gif" href="../ico/favicon.ico"/>

    </head>
    <body>
        <div class="interface">
            <div id="DivLogout">
                <form name="frmLogout" method="post" action="logout.php">
                    <input type="submit" class="butaoLogout" onclick="return CertezaLogout()" value="Logout"/>
                </form>
                <?php
                include("Templates.php");
                include("./ConectaAlmoxarifado.php");
                $cook = $_COOKIE["nome_usuario"];
                include 'NomeImprimirLogin.php';
                ?>
            </div>
            <img src="../Imgs/89480.gif" alt="" class="Ampulheta"/>
            <h1 class="titulo">Realizar Pedido</h1>
            <!--Exibir Produtos neste codigo PHP -->
            <div class="divIFrame">
                <iframe class="IFrame" src="templatesProdutos/PaginaPedido.php" marginHeight="0" frameBorder="0" width="100%" height="90%">    
                </iframe>
            </div>
            
            <form style="margin-top: -100px;margin-left: 570px;" name="formVoltar" method="post" action="pagina_inicial.php">
                <input  class="butao" class="float_esquerda" type="submit" Value="Voltar">
            </form>
        </div>  
    </body>
</html>

