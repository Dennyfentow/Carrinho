<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include "valida_cookies.php";
?>
<html lang="pt-br">
    <head>
        <title>Controle</title>
        <meta charset="utf-8">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/verificacao.js" type="text/javascript"></script>
        <script src="../js/linkagem_entre_paginas.js" type="text/javascript"></script>
        <link rel="shortcut icon" href="../ico/favicon.ico">
        <link rel="icon" type="image/gif" href="../ico/favicon.ico">
    </head>
    <body>
        <?php
        include "valida_cookies.php";
        ?>
        <div class="interface">
            <div id="DivLogout">
                <form name="frmLogout" method="post" action="logout.php">
                    <input type="submit" class="butaoLogout" onclick="return CertezaLogout()" value="Logout"/>
                </form>
                <?php
                include("Templates.php");
                include("./ConectaAlmoxarifado.php");
                $cook = $_COOKIE["nome_usuario"];
                include './NomeImprimirLogin.php';
                ?>
            </div>
            <img src="../Imgs/89480.gif" class="Ampulheta" alt=""/> <!--Gift -->
            <h1 class="titulo">Avaliação 1</h1>
            <form name="form1" method="post">


                <label class="lblPrincipal" class="lblradio">
                    <input type="radio" class="inputsPrincipal" name="rads" value="manEstoque"/>
                    <img src="../img/ImgManuEstoque.png" alt=""/>
                </label>
                <label class="lblPrincipal" class="lblradio">
                    <input type="radio" class="inputsPrincipal" name="rads" value="manFornecedor"/>
                    <img src="../img/ImgManuFornecedor.png" alt=""/>
                </label>
                <label class="lblPrincipal" class="lblradio">
                    <input type="radio" class="inputsPrincipal" name="rads" value="realizarPedido"/>
                    <img src="../img/comprar.png" alt=""/>
                </label>

                <p>
                    <br><br><br><br>
                    <input type="button" class="butao" onclick="BotaoProximo1()" value="Confirmar">
                </p>

            </form>
        </div>
        <!--<script src="js/verificacaoEstoque.js" type="text/javascript"></script> BOTÃO PROXMIMO ALTERNATIVO..-->
    </body>
</html>