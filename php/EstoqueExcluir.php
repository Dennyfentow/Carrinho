<?php
include "valida_cookies.php";
?>
<html>
    <head>
        <title>Excluir Estoque</title>
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

//variaveis de exclusao de dados
$cod_est_exc = $_POST["codee"]; //variavel do cod de exclusao

$resultadoCod = mysql_query("select * from estoque where est_cod = $cod_est_exc");
@$id = mysql_result($resultadoCod, 0, 0);

if ($id != FALSE && $id != " ") {

$resultado = mysql_query("delete from estoque where est_cod = $cod_est_exc");


if ($resultado == true) {

    echo("Exclusao Realizada com sucesso.");
} else {

    echo("Falha na Exclusao.");
}

} else {

    echo "O codigo digitado nao existe!";
}

mysql_close($conexao);

?>

<br><br>
            <div class = "DivVoltares">
                <input class="butaoVoltarPHP" type="button" onclick="VoltarPrincipal()" Value="Menu Principal">
                <input class="butaoVoltarPHP" type="submit" onclick="VoltarEstoque()" Value="Voltar">
            </div>
        </div>
    </body>
</html>