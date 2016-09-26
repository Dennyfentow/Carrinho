<?php
$resultado = mysql_query("SELECT usu_Nome FROM usuarios where usu_Usuario like '$cook'")
                    or die(mysql_error());
                $i = 0;
                $NomeUsuario = mysql_result($resultado,0,0);
                $profile = new Template("NomeImprimirLogin.tpl");
                $profile->set("username", $NomeUsuario);
                echo $profile->output();
?>
