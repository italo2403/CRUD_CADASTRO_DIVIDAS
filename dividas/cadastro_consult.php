<?php

	include("conexao.php");
	//Consultando dados no Banco de Dados
	$result_usuario="SELECT * FROM cadastro ORDER BY id DESC";
	$resultado_usuario = mysqli_query($conexao, $result_usuario);

	if ($result_usuario  AND ($resultado_usuario->num_rows !=0))
{
	while ($row_usuarios = mysqli_fetch_assoc($resultado_usuario)) {
		echo $row_usuarios['nome']; "<br";
	}
		
	}else{
		echo "Não há Usuários";
	}