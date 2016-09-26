
<html>
    <head>
        <title>Cadastro</title>
        <meta charset="UTF-8"/>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/verificacaoEstoque.js" type="text/javascript"></script>
        <script src="../js/linkagem_entre_paginas.js" type="text/javascript"></script>
        <link rel="shortcut icon" href="../ico/favicon.ico">
        <link rel="icon" type="image/gif" href="../ico/favicon.ico">
    </head>
    <body>
        <div class="interface">

            <?php
//Conexao Banco de Dados
            include "ConectaAlmoxarifado.php";

//variaveis de inclusao de dados
            $cad_nome = $_POST["nome"];
            $cad_usu = $_POST["usuario"];
            $cad_sen = $_POST["senha"];
            $cad_email = $_POST["email"];
            $cad_telefone = $_POST["telefone"];
            $cad_cidade = $_POST["cidade"];
            $cad_estado = $_POST["estado"];

            try {

                $resultado = mysql_query("insert into usuarios(usu_Nome,usu_Usuario,usu_Senha,usu_Email, usu_Telefone, usu_Cidade,usu_Estado)"
                        . "VALUES('$cad_nome','$cad_usu','$cad_sen','$cad_email','$cad_telefone', '$cad_cidade','$cad_estado')");
                
                echo "Inclusão realizada com sucesso!";
            } catch (Exception $ex) {
                
                echo("Falha na Inclusao: $ex");
            }


            mysql_close($conexao);
            ?>

            <br><br>
            <div class = "DivVoltares">

                <input class="butaoVoltarPHP" type="submit" onclick="irIndex()" Value="Pagina Inicial!">
            </div>
        </div>
    </body>
</html>