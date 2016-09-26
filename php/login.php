<?php
// obtém os valores digitados
$UsuarioLogin = $_POST["username"];
$senhaLogin = $_POST["senha"];
// acesso ao banco de dados
include "ConectaAlmoxarifado.php";
$resultado = mysql_query("SELECT usu_Nome,usu_Usuario, usu_Senha FROM usuarios where usu_Usuario = '$UsuarioLogin'")
        or die(mysql_error());
$linhas = mysql_num_rows($resultado);
for ($i = 0; $i < $linhas; $i++) {
$usuarioDoBanco = mysql_result($resultado, 0, "usu_Usuario");
}
// testa se a consulta retornou algum registro
if ($linhas == 0) {
    header("Location: ../erros/erro_login.html");
} else {
// confere senha
    if ($senhaLogin != mysql_result($resultado, 0, "usu_Senha")) {
        header("Location: ../erros/erro_login.html");
    } else {
// usuário e senha corretos - criação dos cookies
        setcookie("nome_usuario", $UsuarioLogin, time()+ 3600);
        setcookie("senha_usuario", $senhaLogin, time()+3600);
// direciona para a página inicial dos usuários cadastrados
        
        include valida_cookies.php;
        
        header("Location: pagina_inicial.php");
        
    }
}
mysql_close($conexao);
?>