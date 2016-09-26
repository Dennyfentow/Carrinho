<?php

// testa se os cookies foram definidos
If (isset($_COOKIE['nome_usuario'])) {
    $nome_usuario = $_COOKIE["nome_usuario"];
}
If (isset($_COOKIE['senha_usuario'])) {
    $senha_usuario = $_COOKIE['senha_usuario'];
}

// verifica se os cookies existem
If ($_SERVER['REQUEST_METHOD'] == 'POST' && (!(empty($nome_usuario) OR empty($senha_usuario)))) {
    include "./ConectaAlmoxarifado.php";
    $resultado = mysql_query("SELECT usu_Nome,usu_Usuario, usu_Senha FROM usuarios where usu_Usuario = '$nome_usuario'");
    if (mysql_num_rows($resultado) == 1) {
// se os cookies existem, mas a senha não confere, apaga os cookies, exibe mensagem de erro e sai.
        if ($senha_usuario != mysql_result($resultado, 0, "usu_Senha")) {
            mysql_close($conexao);
            setcookie("nome_usuario");
            setcookie("senha_usuario");
            header("Location: ../erros/fim_sessao.html");
            exit;
        } else {
            
        }
    }
// se os cookies existem, mas o nome do usuário não confere, apaga os cookies, exibe mensagem de erro e sai.
    else {
        setcookie("nome_usuario");
        setcookie("senha_usuario");
        mysql_close($conexao);
        header("Location: ../erros/fim_sessao.html");
        exit;
    }
}

if ((empty($nome_usuario) OR empty($senha_usuario))) {
// se os cookies não existem, exibe mensagem de erro e sai.
    mysql_close($conexao);
    header("Location: ../erros/fim_sessao.html");
    
    exit;
}
?>
