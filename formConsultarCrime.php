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
<body> 
<div class="container">
  <div class="row">
    <div class="col-sm-6">
    	<div class="page-header text-center">
    		<h2>Consultar Crimes</h2>
    	</div>
    	<form action="inserirCrimes.php" method="post" accept-charset="utf-8">
    		
    		<fieldset>
    			<legend>Informações sobre o crime</legend>
  	  			<div class="form-group" id="cidades" class ="hidden" >
  	  				<label class="control-label"> Cidades: </label>
  	  				<?php  
					    $conn = new mysqli("localhost","root","","cvlipe");
					    $sql = "SELECT nomecidades FROM cidades";
					    $result = $conn->query($sql);
					    $nomecidades = -1;
					    echo "<select name='cidade'>";
					    if ($result->num_rows > 0) {
					      while($row = $result->fetch_assoc()) {
					        echo "<option value='".$row[nomecidades]."'>";
					        echo $row["nomecidades"];
					        echo "</option>";
					      }
					    } 
					    $conn->close();
				    ?>
				    </select>
			    </div>
			    </fieldset>
			    </form>

			    <div class= "form-group">
			    	<label >digite o nome da vítima</label>
			    	input<input type="text" name="nome_vitima">
			    </div>
			    <div class= "form-group">
			    	<label >selecione a data de ocorrência</label>
			    	<input type="date" name="data_ocorrencia">
			    </div>
			    <div class= "form-group">
			    	<label >selecione a idade da vitima</label>
			    	<input type="number" name="idade">
			    </div>
			      <div class="form-group">
			      <label>sexo</label><br>	
				  <input type="radio" name="sexo" value="masculino" checked> masculino<br>
				  <input type="radio" name="sexo" value="feminino"> feminino<br>
				</div>
				<div class="form-group">	
			    	<label>objeto utilizado</label><br> 
			    	<select name="objeto_utilizado">
					    <option>ARMA DE FOGO</option >
					    <option>ARMA BRANCA</option >
					    <option>OUTRO TIPO DE OBJETO</option > 
					    </select>
					        
			    </div>	


			   <div class="form-group">	
			    	<label>tipo de crime</label> 
			    	<select name="tipo_crime">
					        <option>ASSALTO A MÃO ARMADA</option >
					        <option>LATROCÍNIO</option >
					        <option>HOMICIDIO</option > 
					        <option>LESOES CORPORAIS SEGUIDA DE MORTE</option > <br>

					        </select>
			    </div>
				<div class="form-group">	
			    	<label>quantiadde de vitimas </label><br>
			    	<input type="number" min="1" max="10000" class="form-control" name="qtd_vitimas" placeholder="digite a quantidade de vítimas" >
			    </div>	
</body>
</html>