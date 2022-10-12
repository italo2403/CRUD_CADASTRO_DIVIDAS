<!DOCTYPE html>

<html lang="pt-br">
<link rel="stylesheet" href="style.css">

<head>

<meta charset="utf-8"/>

<title>Cadastro Dividas</title>

</head>

<body>

	<div class="container">
<form action="dividas.php" method="POST">

<label for="">Origem: </label>
<input type="text" name="origem">
</br>
<label for="">Valor: </label>
<input type="text" name="valor">
</br>
<label for="">Dia </label>
<input type="date" name="dia_compra">
</br>
<label for="">Produto </label>
<input type="text" name="produto">
</br>
<label for="">Quem Comprou </label>
<input type="text" name="comprou">
</br>

<button type="submit">Cadastrar</button>
</br>
<button type="reset">Limpar</button>
<br>

</br>
</form>

</div>

</body>

</html>