
<?php

/* conexao com bd */

$servername = "baseteste.svr.br";
$username = "basetestesrc_u_GutavoIanque";
$password = "videky123"
$database ="baseteste_GustavoIanque"


$conexao = mysqli_connect($servername,$username, $password, $database );

if(!$conexao){
    die("falhou a conexao".mysqli_connect_error());
}else{
    echo "conectado com sucesso";
}//chega se conexao com o banco de dado foi um sucesso.

?>