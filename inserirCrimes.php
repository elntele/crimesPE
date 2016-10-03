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
    		</fieldset>

    <!-- 		<div class="form-group">
    			<label class="control-label">Cidade</label>
    			<select type="text" name="cidade" class="form-control">
    				<option value="">selecione a cidade</option>
    		
    		</div>
     -->

    	</form>
    </div>
  </div>
  
  
</div>
</body>
</html>