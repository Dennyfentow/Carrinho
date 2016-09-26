<?php

include "../Templates.php";

//Conexao Banco de Dados
include "../ConectaAlmoxarifado.php";
header("Content-type: text/html; charset=utf-8");
$resultado = mysql_query("SELECT est_cod, est_nome, est_qtd, est_pto, est_preco FROM fornecedor, estoque "
        . "WHERE for_cod = est_for order by est_cod")
        or die(mysql_error());

 $linhasP = mysql_num_rows($resultado);

for ($i = 0; $i < $linhasP; $i++) {

    $produtos[$linhasP]["codigoProd"] = mysql_result($resultado, $i, "est_cod");
    $produtos[$linhasP]["nomeProd"] = mysql_result($resultado, $i, "est_nome");
    $produtos[$linhasP]["qtde"] = mysql_result($resultado, $i, "est_qtd");
    $produtos[$linhasP]["pontoRep"] = mysql_result($resultado, $i, "est_pto");
    $produtos[$linhasP]["preco"] = number_format(mysql_result($resultado, $i, "est_preco"), 2, ',', '.'); //retorna R$100.000,50 
    $produtos[$linhasP]["precoCal"] = mysql_result($resultado, $i, "est_preco");

    foreach ($produtos as $result) {
        $row = new Template("lista_produtos_linhas.tpl");

        foreach ($result as $key => $value) {
            $row->set($key, $value);
        }
        $templateProdutos[] = $row;
    }

}


$ContentsProdutos = Template::merge($templateProdutos);
$listaProd = new Template("lista_produtos.tpl");

$listaProd->set("Produtos", $ContentsProdutos);
$paginaProd = new Template("todosProdutos.tpl");
$paginaProd->set("content", $listaProd->output());


echo $paginaProd->output();
