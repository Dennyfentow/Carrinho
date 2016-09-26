<?php
mysql_close($conexao);
setcookie("nome_usuario");
setcookie("senha_usuario");
header ("Location: ../index.html");
?>
