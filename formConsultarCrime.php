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
  	  				<?php if (!empty($_POST["cidade"])){
  	  				echo'<label class="control-label"> Cidades: </label>';
  	  				 
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
				    
				    echo '</select>';
				}
				   ?>
			    </div>
			    </fieldset>
			    </form>
			    <!--########################-->	
			     <div class= "form-group">
			    	
			    	<?php 
			    		if (!empty($_POST["nome"])){

  	  					echo '<label >digite o nome da vítima</label>';
			    	    echo '<input type="text" name="nome_vitima">';

  	  				}

  	  				?>

			    	
			    </div>
			    <div class= "form-group">

			    	<?php 
			    		if (!empty($_POST["ocorrencia"])){

  	  					echo '<label >selecione a data de ocorrência</label>';
			    	    echo '<input type="date" name="data_ocorrencia">';

  	  				}

  	  				?>

			    	
			    	
			    </div>
			    <div class= "form-group">

			    	<?php 
			    		if (!empty($_POST["idade"])){

  	  					echo '<label >selecione a idade da vitima</label>';
			    	    echo '<input type="number" name="idade">';

  	  				}

  	  				?>

			    	
			    	
			    </div>
			    <!--########################-->
			     
			     <?php 
			     if (!empty($_POST["sexo"])){	
			     echo '<div class="form-group">';
			     echo '<label>sexo</label><br>';	
				 echo '<input type="radio" name="sexo" value="masculino" checked> masculino<br>';
				 echo '<input type="radio" name="sexo" value="feminino"> feminino<br>';
				echo'</div>';
			}
				?>
				<?php

				if (!empty($_POST["objeto"])){
				echo'<div class="form-group">';	
			    	echo'<label>objeto utilizado</label><br> ';
			    	echo'<select name="objeto_utilizado">';
					    echo'<option>ARMA DE FOGO</option >';
					    echo'<option>ARMA BRANCA</option >';
					    echo'<option>OUTRO TIPO DE OBJETO</option >'; 
					    echo'</select>';
			    echo '</div>';	
			}
			    ?>

			    <?php	
			    if (!empty($_POST["tipo"])){
			   echo'<div class="form-group">';	
			    	echo'<label>tipo de crime</label>'; 
			    	echo'<select name="tipo_crime">';
					    echo'<option>ASSALTO A MÃO ARMADA</option >';
					    echo'<option>LATROCÍNIO</option >';
					    echo'<option>HOMICIDIO</option > ';
					    echo'<option>LESOES CORPORAIS SEGUIDA DE MORTE</option > <br>';
					    echo'</select>';
			    echo'</div>';
			}
				?>

				<?php
				if(!empty($_POST["vitimas"]))	{
				echo'<div class="form-group">';
			    echo '<label>quantidade de vitimas </label><br>';
			    echo '<input type="number" min="1" max="10000" class="form-control" name="qtd_vitimas" placeholder="digite a quantidade de vítimas" >';
			    echo '</div>';	
			}
			?>
			<a href="formPreConsultarCrime.php" class="btn btn-primary"  role="button">voltar</a>
</body>
</html>