<?php
$servidor ="localhost";
$usuario = "root";
$senha = "";
$dbname="divida_fa";

$conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao){
 die("Houve um erro: ".mysqli_connect_error());
}


?>