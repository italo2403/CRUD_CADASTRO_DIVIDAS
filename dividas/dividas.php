<?php

	include("conexao.php");
	
	$origem=$_POST['origem'];
	$valor=$_POST['valor'];
	$dia_compra=$_POST['dia_compra'];
	$produto=$_POST['produto'];
	$comprou=$_POST['comprou'];


	//Inserindo dados no Banco de Dados
	$sql = "INSERT INTO dividas_fa(origem, valor, dia_compra, produto, comprou)
	VALUES ('$origem', '$valor', '$dia_compra', '$produto', '$comprou')";
	if(mysqli_query($conexao, $sql)){
		echo "Divida Cadastrada";
	}else{
		echo "Erro". mysqli_connect_error($conexao);
	}
	
	mysqli_close($conexao);
?>
