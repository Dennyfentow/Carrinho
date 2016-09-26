<?php

//local onde esta rodando o php 
//Testes...
$hostname = "localhost";
$username1 = "root";
$senha = "usbw";
$banco = "u947965840_almox";


/*$hostname = "mysql.hostinger.com.br";
$username1 = "u947965840_nigga";
$banco = "u947965840_almox";
$senha = "qwerasdf1!";*/
//abre uma conexao com o servidor MySql
$conexao = @mysql_connect($hostname,$username1,$senha);
mysql_set_charset('utf8');
//seleciona um banco de dados MySql
mysql_select_db($banco,$conexao);
?>
