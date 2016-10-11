<?php
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      header('Location:formConsultarCrime.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
	<script src="bootstrap/js/jquery-3.1.1.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="font awesome/css/font-awesome.css">
	<!--###############pingendo##########################-->  
	<link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
	<!--######################################### -->
	<title></title>
</head>
<body> 
	<div class="container">
		<div class="jumbotron">
		  <h2>CONTROLE DE CONSULTA</h2>
		  <p>selecione uma ou mais caracteristicas pelas quais você quer consultar o crime:</p>
		    <form method="post" name="form" action="formConsultarCrime.php" onsubmit="return valida()">
			    <div class="checkbox">
			      <label><input type ="checkbox"  value ="cidade" name ="cidade"> consultar por cidade</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="nome_vitima" name="nome">consultar por nome?</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="data_ocorrencia" name="ocorrencia">consultar por data de ocorrência?</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="idade"  name="idade">consultar por idade?</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="sexo" name="sexo">consultar por sexo?</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="objeto_utilizado" name="objeto">consultar por objeto utilizado?</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="tipo_crime" name="tipo"> consultar por tipo de crime?</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="qtd_vitima" name="vitimas">consultar por quantidade de vítimas?</label>
			    </div>
			    
			    <div class="container">
  					<div class="row">
    					<div class="col-sm-2"> 
      						<input type="submit" value="continuar" class="btn btn-primary">
    					</div>
    					<div class=" col-sm-2"> </div>
    					<div class=" col-sm-2"> </div>
    					<div class=" col-sm-2"> </div>
    					<div class=" col-sm-2"> </div>
    					<div class=" col-sm-2">
      						<a href="index.html" class="btn btn-primary"  role="button">Página inicial</a>
    					</div>
  					</div>
				</div>

			    
	  		</form>
	  		
	  	</div>
	</div>
	<footer class="section section-primary"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-sm-6"> 
					<h1>Sistema de denúncia de crimes</h1> 
					<p>Todos os direitos reservados</p>
				</div>
				<div class="col-sm-6"> <p class="text-info text-right"> <br><br></p>
					<div class="row"> 
						<div class="col-md-12 hidden-lg hidden-md hidden-sm text-left"> 
							<a href="#"><i class="fa fa-3x fa-fw text-inverse fa-apple"></i></a> 
							<a href="#"><i class="fa fa-3x fa-fw text-inverse fa-android"></i></a> 
							<a href="#"><i class="fa fa-3x fa-fw text-inverse fa-windows"></i></a> 
							<a href="#"><i class="fa fa-3x fa-fw hub text-inverse fa-linux"></i></a> 
						</div>
					</div>
					<div class="row"> 
						<div class="col-md-12 hidden-xs text-right"> 
							<a href="#"><i class="fa fa-3x fa-fw text-inverse fa-apple"></i></a> 
							<a href="#"><i class="fa fa-3x fa-fw text-inverse fa-android"></i></a> 
							<a href="#"><i class="fa fa-3x fa-fw text-inverse fa-windows"></i></a> 
							<a href="#"><i class="fa fa-3x fa-fw hub text-inverse fa-linux"></i></a> 
						</div>
					</div>					
				</div>
			</div>
		</div>
	</footer>

<script >
			function valida(){
				
				var vetor=[];
				var checkbox0 = document.form.cidade.checked;
				vetor.push(checkbox0);
				var checkbox1 = document.form.nome.checked;
				vetor.push(checkbox1);
				var checkbox2 = document.form.ocorrencia.checked;
				vetor.push(checkbox2);
				var checkbox3= document.form.idade.checked;
				vetor.push(checkbox3);
				var checkbox4= document.form.sexo.checked;
				vetor.push(checkbox4);
				var checkbox5 = document.form.objeto.checked;
				vetor.push(checkbox5);
				var checkbox6 = document.form.tipo.checked;
				vetor.push(checkbox6);
				var checkbox7 = document.form.vitimas.checked;
				vetor.push(checkbox7);
				var chavecheckbox= false;
				
				
				
				for (i=0;i<=7;i++){

						if(vetor[i]){
								chavecheckbox=true;
								} 

						}
			if (chavecheckbox){
				
                  

                  return true;

			
			}else{
				alert("escolha ao menos uma caracteristica");
						return false;
				}

			
			}

		</script>
	
</body>
</html>