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
    		<h2>Inserir Crimes</h2>
    	</div>
    	<form action="php/inserirCrimes.php" method="post" accept-charset="utf-8">
    		<fieldset>
    			<legend>Informações sobre o crime</legend>
  	  			<div class="form-group">
  	  				<label class="control-label"> Cidades: </label>
  	  				<?php  
					    $conn = new mysqli("localhost","root","","cvlipe");
					    $sql = "SELECT nomecidades FROM cidades";
					    $result = $conn->query($sql);
					    $nomecidades = -1;
					    echo "<select name='nomecidades'>";
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

			    <div class="form-group">	
			    	<label>Data de ocorrência</label>
			    	<input type="date" class="form-control" name="data" >
			    </div>	

			    <div class="form-group">	
			    	<label>idade</label>
			    	<input type="number" min="0" max="100" class="form-control" name="idade" placeholder="digite sua idade" >
			    </div>	

			     <div class="form-group">	
			    	<label>nome</label>
			    	<input type="text"  class="form-control" name="nome" placeholder="digite o nome da vítima" >
			    </div>	

			    <div class="form-group">	
			    	<label>objeto utilizado</label><br> 
			    	<select name="objeto">
					    <option>ARMA DE FOGO</option >
					    <option>ARMA BRANCA</option >
					    <option>OUTRO TIPO DE OBJETO</option > 
					    </select>
					        
			    </div>	

			    <div class="form-group">	
			    	<label>quantiadde de vitimas </label><br>
			    	<input type="number" min="1" max="10000" class="form-control" name="qtd vitimas" placeholder="digite a quantidade de vítimas" >
			    </div>	
			    <div class="form-group">
			      <label>sexo</label><br>	
				  <input type="radio" name="gender" value="masculino" checked> masculino<br>
				  <input type="radio" name="gender" value="feminino"> feminino<br>
				</div>

				<div class="form-group">	
			    	<label>objeto utilizado</label> 
			    	<select name="objeto">
					        <option>ARMA DE FOGO</option >
					        <option>ARMA BRANCA</option >
					        <option>OUTRO TIPO DE OBJETO</option > 
					        
			    </div>	





    		</fieldset>

   
    	</form>
    </div>
  </div>
  
  
</div>
</body>
</html>