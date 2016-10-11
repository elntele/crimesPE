<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
		<script src="bootstrap/js/jquery-3.1.1.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="bootstrap/js/validator.js"></script>
		<title></title>
	</head>
	<body>
    	<div class="page-header text-center">
    		<h2>Inserir Crimes</h2>
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-6">
    				<form action="inserirCrimes.php" method="post" accept-charset="utf-8" data-toggle="validator" role="form">
    					<fieldset>
    						<legend>Informações sobre o crime</legend>
  	  						<div class="form-group has-feedback">
  	  							<label class="control-label">Cidades</label>
  	  							<?php  
					    			$conn = new mysqli("localhost","root","","cvlipe");
					    			$sql = "SELECT nomecidades FROM cidades";
					    			$result = $conn->query($sql);
					    			$nomecidades = -1;
					    			echo "<select class='form-control input-sm' name='cidade' data-error='Selecione um dos municípios*'required>";
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
				    			<div class="help-block with-errors"></div>
				    		</div>

			    			<div class="form-group has-feedback">	
			    				<label>Data da ocorrência</label>
			    				<input type="date" class="form-control input-sm" name="data_ocorrencia" data-error="Informe a data do crime*" required>
			    				<div class="help-block with-errors"></div>
			    			</div>	

			    			<div class="form-group has-feedback">	
			    				<label>Idade</label>
			    				<input type="number" min="0" max="100" class="form-control input-sm" name="idade" placeholder="Informe a idade da vítima" data-error="Preencha este campo*" required>
			    				<div class="help-block with-errors"></div>
			    			</div>	

			     			<div class="form-group has-feedback">	
			    				<label>Nome</label>
			    				<input type="text"  class="form-control input-sm" name="nome_vitima" placeholder="Informe o nome completo da vítima" data-error="Preencha este campo*" required>
			    				<div class="help-block with-errors"></div>
			    			</div>	

			    			<div class="form-group has-feedback">	
			    				<label>Objeto utilizado</label><br> 
			    				<select class="form-control input-sm" name="objeto_utilizado" data-error="Selecione o objeto utilizado*" required>
			    					<option></option>
					    			<option>ARMA DE FOGO</option >
					    			<option>ARMA BRANCA</option >
					    			<option>OUTRO TIPO DE OBJETO</option > 
					    		</select>
					    		<div class="help-block with-errors"></div>
					        </div>	

			    			<div class="form-group has-feedback">	
			    				<label>Quantidade de vítimas </label><br>
			    				<input type="number" min="1" max="10000" class="form-control input-sm" name="qtd_vitimas" placeholder="Informe a quantidade de vítimas" data-error="Preencha este campo*" required>
			    				<div class="help-block with-errors"></div>
			    			</div>	
			    
			    			<div class="form-group has-feedback">
			      				<label>Sexo</label><br>	
				  				<label class="radio-inline">
				  					<input type="radio" name="sexo" value="masculino" required>Masculino
				  				</label>
				  				<label class="radio-inline">
				  					<input type="radio" name="sexo" value="feminino" required>Feminino
				  				</label>
				  				<div class="help-block with-errors"></div>
							</div>

							<div class="form-group has-feedback">	
			    				<label>Tipo de crime</label> 
			    				<select class="form-control input-sm" name="tipo_crime" data-error="Selecione o tipo de crime*" required>
			    					<option></option>
					        		<option>ASSALTO A MÃO ARMADA</option >
					        		<option>LATROCÍNIO</option >
					        		<option>HOMICÍDIO</option > 
					        		<option>LESÕES CORPORAIS SEGUIDA DE MORTE</option > <br>
					        	</select>
					        	<div class="help-block with-errors"></div>
			    			</div>
			    			<div>
			    				<button type="submit" class="btn btn-primary">Enviar</button>
			    			</div>
			    			<br>
			    		</fieldset>
   					</form>
    			</div>
  			</div>
		</div>
	</body>
</html>