<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
	<script src="bootstrap/js/jquery-3.1.1.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>

	<title></title>
</head>
</div>
<body> 
<h1>selecione uma ou mais caracteristicas você quer consultar o crime</h1>
<div>

	<form>
		<h3> consultar por cidades? </h3>
		<input type="radio" name="cidade">
	</form>
	<form>
		<h3> consultar por nome? </h3>
		<input type="radio" name="nome_vitima">
	</form>
<form>
		<h3> consultar por data de ocorrência? </h3>
		<input type="radio" name="data_ocorrencia">
	</form>
<form>
		<h3> consultar por idade? </h3>
		<input type="radio" name="idade">
	</form>
	<form>
		<h3> consultar por sexo? </h3>
		<input type="radio" name="sexo">
	</form>
<form>
		<h3> consultar por objeto utilizado? </h3>
		<input type="radio" name="objeto_utilizado">
	</form>
<form>
		<h3> consultar por tipo de crime? </h3>
		<input type="radio" name="tipo_crime">
	</form>
<form>
		<h3> consultar por quantidade de vítimas? </h3>
		<input type="radio" name="cidade">
	</form>





</body>
VALUES ('$_POST[cidade]', '$_POST[data_ocorrencia]', '$_POST[idade]', '$_POST[nome_vitima]', '$_POST[objeto_utilizado]', '$_POST[qtd_vitimas]', '$_POST[sexo]', '$_POST[tipo_crime]')";