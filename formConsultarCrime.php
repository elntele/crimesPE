<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
		<script src="bootstrap/js/jquery-3.1.1.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="consultarCrimeAjax.js"></script>
		<script src="bootstrap/js/validator.js"></script>

		<script>
			
			function toUpper(input) {
				// body...
				input.value = input.value.toUpperCase();
			}

		</script>
		<title></title>
	</head>
	<body> 
		<div class="page-header text-center">
    		<h2>Consultar Crimes</h2>
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-6">
    				<form  method="post" accept-charset="utf-8">
    					<fieldset>
    						<legend>Informações sobre o crime</legend>
  	  						<div class="form-group" id="cidades" class ="hidden" >
  	  							<?php 
  	  								if (!empty($_POST["cidade"])){
  	  									echo'<label class="control-label"> Cidade </label>';
  	  				 
					    			$conn = new mysqli("localhost","root","","cvlipe");
					    			$sql = "SELECT nomecidades FROM cidades";
					    			$result = $conn->query($sql);
					    			$nomecidades = -1;
					    			echo "<select name='cidade' id='cidade' class='form-control input-sm'>";
					    			if ($result->num_rows > 0) {
					      				while($row = $result->fetch_assoc()) {
					        			echo "<option value='".$row[nomecidades]."'>";
					        			echo $row["nomecidades"];
					        			echo "</option>";
					      				}
					    			} 
					    			$conn->close();
				    				echo '</select>';
									} else{
			    	    			echo '<div name="cidade" id="cidade" value="null" ></div>';
			    	    		}
				   				?>
			    			</div>
			    		</fieldset>
			    	</form>
			    <!--########################-->	
			     		<div class= "form-group">
			    			<?php 
			    				//$strPost = strtoupper('$_POST["nome"]');
			    				if (!empty($_POST["nome"])){
			    					echo '<label class="control-label">Nome</label>';
			    	    			echo '<input class="form-control input-sm" type="text" name="nome_vitima" id="nome_vitima" onkeyup="toUpper(this)" placeholder="Informe o nome da vítima">';
			    	    		}else{
			    	    			echo '<div name="nome_vitima" id="nome_vitima" value="null" ></div>';
			    	    		}
			    			?>
			    		</div>
			    		<div class= "form-group">
			    			<?php 
			    				if (!empty($_POST["ocorrencia"])){
			    					echo '<label class="control-label">Data de ocorrência</label>';
			    	    			echo '<input class="form-control input-sm" type="date" name="data_ocorrencia" id="data_ocorrencia">';
			    	    		}else{
			    	    			echo '<div name="data_ocorrencia" id="data_ocorrencia" value="null" ></div>';
			    	    		}
			    	    	?>
			    	    </div>
			    		<div class= "form-group">
			    			<?php 
			    				if (!empty($_POST["idade"])){
			    					echo '<label class="control-label">Idade</label>';
			    	    			echo '<input class="form-control input-sm" type="number" name="idade" id="idade" placeholder="Informe a idade da vítima">';
			    	    		}else{
			    	    			echo '<div name="idade" id="idade" value="null" ></div>';
			    	    		}
			    	    	?>
			    	    </div>
			    <!--########################-->
			     
			    			<?php 
			     				if (!empty($_POST["sexo"])){	
			     					echo '<div class="form-group">';
			     						echo '<label>Sexo</label><br>';	
				 						echo '<input type="radio" name="sexo" id="sexo" value="MASCULINO" checked> masculino<br>';
				 						echo '<input type="radio" name="sexo"  id="sexo"value="FEMININO"> feminino<br>';
									echo'</div>';
								}else{
			    	    			echo '<div name="sexo" id="sexo" value="null" ></div>';
			    	    			
			    	    		}
							?>
							<?php
								if (!empty($_POST["objeto"])){
									echo'<div class="form-group">';	
			    						echo'<label class="control-label">Objeto utilizado</label><br> ';
			    						echo'<select class="form-control input-sm" name="objeto_utilizado" id="objeto_utilizado" placeholder="Selecione o tipo de arma">';
					    					echo'<option>ARMA DE FOGO</option >';
					    					echo'<option>ARMA BRANCA</option >';
					    					echo'<option>OUTRO TIPO DE OBJETO</option >'; 
					   					echo'</select>';
			    					echo '</div>';	
								}else{
			    	    			echo '<div name="objeto_utilizado" id="objeto_utilizado" value="null" ></div>';
			    	    		}
			    			?>
			    			<?php	
			    				if (!empty($_POST["tipo"])){
			   						echo'<div class="form-group">';	
			    						echo'<label class="control-label">Tipo de crime</label>'; 
			    						echo'<select class="form-control input-sm" name="tipo_crime" id="tipo_crime" placeholder="Selecione o tipo de crime">';
					    					echo'<option>ASSALTO A MAO ARMADA</option >';
					    					echo'<option>LATROCINIO</option >';
					    					echo'<option>HOMICIDIO</option > ';
					   						echo'<option>LESOES CORPORAIS SEGUIDA DE MORTE</option > <br>';
					    				echo'</select>';
			    					echo'</div>';
								}else{
			    	    			echo '<div name="tipo_crime" id="tipo_crime" value="null" ></div>';
			    	    		}
							?>
							<?php
								if(!empty($_POST["vitimas"]))	{
									echo'<div class="form-group">';
			    						echo '<label class="control-label">Quantidade de vitimas </label><br>';
			    						echo '<input  class="form-control input-sm" type="number" min="1" max="10000" class="form-control" name="qtd_vitimas" id="qtd_vitimas" placeholder="Informe a quantidade de vítimas" >';
			    					echo '</div>';	
								}else{
			    	    			echo '<div name="qtd_vitimas" id="qtd_vitimas" value="null" ></div>';
			    	    		}

							?>

							<div id= "resultado">
								
							</div>

			<a href="formPreConsultarCrime.php" class="btn btn-primary"  role="button">voltar</a>
			<!--<input type="button" onclick="buscarCrimes()" class="btn btn-primary">Consultar</input>-->
			<button  onclick="buscarCrimes()" class="btn btn-primary">Buscar</button>
	</body>
</html>