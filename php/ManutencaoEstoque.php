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
        <title>Manutenção Estoque</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/floats.css" rel="stylesheet" type="text/css"/>
        <script src="../js/verificacaoEstoque.js" type="text/javascript"></script>
        <script src="../js/verificacaoEstoqueBranco.js" type="text/javascript"></script>
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
            include './NomeImprimirLogin.php';
            ?>
                </div>
            <img src="../Imgs/89480.gif" alt="" class="Ampulheta"/>
            <h1 class="titulo">Manutenção Estoque</h1>
            <div id="DivOpcoes">
                <form name="form2" method="post">
                    <label id="lblIncluir">
                        <input type="radio" id="idIncluir" name="MEstoque" onclick="MudarEstadoTodos()" value="Incluir"/>
                        <img src="../img/incluir.png"  alt=""/>
                    </label>

                    <label id="lblAlterar">
                        <input type="radio" id="idAlterar" name="MEstoque" onclick="MudarEstadoTodos()" value="Alterar"/>
                        <img src="../img/alterar.png"   alt=""/>
                    </label> 

                    <label id="lblExcluir">
                        <input type="radio" id="idExcluir" name="MEstoque" onclick="MudarEstadoTodos()" value="Excluir"/>
                        <img src="../img/excluir.png"   alt=""/>
                    </label>

                    <label id="lblConsultar">
                        <input type="radio" id="idConsultar" name="MEstoque" onclick="MudarEstadoTodos()" value="Consultar"/> 
                        <img src="../img/consultar.png"  alt=""/>
                    </label>



                </form>

                <form name="formVoltar" method="post" action="pagina_inicial.php">
                    <input id="butaoVoltar" class="float_esquerda" type="submit" Value="Voltar">
                </form>



            </div>

            <div id="DivInserir">
                <form name="formincluir" method="post" action="EstoqueIncluir.php">
                    <h3>Incluir</h3>

                    <p>Insira o nome do ítem em estoque:<input type="text" name="n"><br>
                        Insira a quantidade em estoque:<input type="text" name="qt"><br>
                        Insira o ponto de reposição:<input type="text" name="pr"> <br>
                        Insira o código do fornecedor:<input type="text" name="cod"> <br>
                    </p>
                    <br>

                    <input class="butao" type="submit" value="Incluir Registro" onclick="return validar()"> 


                </form>
            </div>
            <div id="DivAlterar">
                <form name="formalterar" method="post" action="EstoqueAlterar.php">
                    <h3>Alterar</h3>
                    <P>
                        Insira o código do estoque do registro o qual deseja alterar:<input type="text" name="codea"> <br>
                        Insira o nome do ítem em estoque:<input type="text" name="na"> <br>
                        Insira a quantidade em estoque:<input type="text" name="qta"> <br>
                        Insira o ponto de reposição:<input type="text" name="pra"> <br>
                        Insira o código do fornecedor:<input type="text" name="coda"> <br>

                    </p>
                    <input class="butao" type="submit" value="Alterar Registro" onclick="return validar2()"> 
                </form>
            </div>
            <div id="DivExcluir">
                <form name="formExcluir" method="post" action="EstoqueExcluir.php">
                    <h3>Excluir</h3>

                    <p>
                        Insira o código do estoque do registro o qual deseja excluir:<input type="text" name="codee"> <br><br>
                    </p>
                    <input class="butao" type="submit" value="Excluir Registro" onclick="return validar3()"/>

                </form>
            </div>
            <div id="DivConsultar">
                <form name="formConsultar" method="post" action="EstoqueConsulTodos.php">

                    <H3>Consultar Todos</h3>
                    <p>
                        <input class="butao" type="submit" value="Consultar todos os Registros">
                    </p>
                </form>
                <form name="formConsultar1" method="post" action="EstoqueConsulEspecifico.php">
                    <h3>Consultar Registro Especifico</h3>
                    <p>
                        Insira o código do estoque do registro o qual deseja <input type="text" name="codec"> <br><br>
                    </p>

                    <input class="butao" type="submit" value="Consultar Registro" onclick="return validar4()">
                </form>
            </div>

        </div>
        <!--<script src="js/verificacaoEstoque.js" type="text/javascript"></script>-->
    </body>
</html>
