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
        <title>Manutenção Fornecedor</title>
               <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/floats.css" rel="stylesheet" type="text/css"/>
        <script src="../js/verificacaoFornecedor.js" type="text/javascript"></script>
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
            <img src="../Imgs/89480.gif" class="Ampulheta" alt=""/>
            <h1 class="titulo">Manutenção Fornecedor</h1>
            <div id="DivOpcoes">
                
                <form name="form3" method="post">
                    <label id="lblIncluir">
                        <input type="radio" id="idIncluir" name="MFornecedor" onclick="MudarEstadoTodos()" value="Incluir"/>
                        <img src="../img/incluir.png"  alt=""/>
                    </label>

                    <label id="lblAlterar">
                        <input type="radio" id="idAlterar" name="MFornecedor" onclick="MudarEstadoTodos()" value="Alterar"/>
                        <img src="../img/alterar.png"   alt=""/>
                    </label> 

                    <label id="lblExcluir">
                        <input type="radio" id="idExcluir" name="MFornecedor" onclick="MudarEstadoTodos()" value="Excluir"/>
                        <img src="../img/excluir.png"   alt=""/>
                    </label>

                    <label id="lblConsultar">
                        <input type="radio" id="idConsultar" name="MFornecedor" onclick="MudarEstadoTodos()" value="Consultar"/> 
                        <img src="../img/consultar.png"  alt=""/>
                    </label>


                </form>

                <form name="formVoltar" method="post" action="pagina_inicial.php">
                    <input id="butaoVoltar" type="submit" Value="Voltar">
                </form>

            </div>
            <div id="DivInserir">
                <form name="formincluir2" method="post" action="FornecedorIncluir.php">
                    <h3>Incluir</h3>
                    <p>
                        Insira o Nome do Fornecedor:<input type="text" name="nf"> <br>
                        Insira o Endereço:<input type="text" name="ef"> <br>
                        Insira o número de Telefone:<input type="text" name="tf"> <br>
                        Insira o Contato:<input type="text" name="cf"> <br>

                    </p>
                    <input class="butao" type="submit" value="Incluir Registro" onclick="return validar()" > 

                    <br><hr><br>
                </form>
            </div>
            <div id="DivAlterar">
                <form name="formalterar2" method="post" action="FornecedorAlterar.php">
                    <h3>Alterar</h3>

                    <p>
                        Insira o código do estoque do registro o qual deseja alterar:<input type="text" name="codfa"> <br>
                        Insira o Nome do Fornecedor:<input type="text" name="nfa"> <br>
                        Insira o Endereço:<input type="text" name="efa"> <br>
                        Insira o número de Telefone:<input type="text" name="tfa"> <br>
                        Insira o Contato:<input type="text" name="cfa"> <br>
                    </p>

                    <input class="butao" type="submit" value="Alterar Registro" onclick="return validar22()"> 

                </form>
            </div>
            <div id="DivExcluir">
                <form name="formExcluir2" method="post" action="FornecedorExcluir.php">
                    <h3>Excluir</h3>
                    <p>
                        Insira o código do Fornecedor que Deseja Excluir deseja excluir:<input type="text" name="codfe"> <br><br>

                        <input class="butao" type="submit" value="Excluir Registro" onclick="return validar33()">

                    </p>
                </form>
            </div>
            <div id="DivConsultar">
                <form name="formConsultar2" method="post" action="FornecedorConsulTodos.php">
                    <h3>Consultar Todos</h3>

                    <p>
                        <input class="butao" type="submit" value="Consultar todos os Registros">
                    </p>

                </form>
                <form name="formConsultar22" method="post" action="FornecedorConsulEspecifico.php">
                    <h3>Consultar Registro Especifico</h3>
                    <p>
                        Insira o código do Fornecedor no qual deseja Consultar: <input type="text" name="codfc">
                        <input class="butao" type="submit" value="Consultar Especifico" onclick= "return validar44()"/>
                    </p>
                    
                </form>
            </div>
        </div>
        <!--<script src="js/verificacaoFornecedor.js" type="text/javascript"></script>-->
    </body>
</html>
