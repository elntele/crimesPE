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
<?php  
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.*/
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:falhaNoLogin.html');
	}

$logado = $_SESSION['login'];
?>
	<div class="container">
		<div class="jumbotron">
		  <h2>CONTROLE DE CONSULTA PARA OFICIAIS</h2>
		  <p>Selecione pelo menos uma das caracteristicas pelas quais você quer consultar o crime</p>
		    <form method="post" name="form" action="formAlterarStatusCrime.php" onsubmit="return valida()">
		    	<div class="checkbox">
			      <label><input type ="checkbox"  value ="id_id" name ="id">Consultar por id</label>
			    </div>
			    
			    <div class="checkbox">
			      <label><input type ="checkbox"  value ="cidade" name ="cidade">Consultar por cidade</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="nome_vitima" name="nome">Consultar por nome</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="data_ocorrencia" name="ocorrencia">Consultar por data de ocorrência</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="idade"  name="idade">Consultar por idade</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="sexo" name="sexo">Consultar por sexo</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="objeto_utilizado" name="objeto">Consultar por objeto utilizado</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="tipo_crime" name="tipo">Consultar por tipo de crime</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" value="qtd_vitima" name="vitimas">Consultar por quantidade de vítimas</label>
			    </div>
			    
			    <div class="container">
  					<div class="row">
    					<div class="col-lg-1 col-md-1 col-sm-2 col-xs-1 text-left"> 
      						<button type="submit" class="btn btn-primary">Continuar</button>
    					</div>
    					
    					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 text-right">
      					<a href="matarSessao.php" class="btn btn-primary"  role="button">Sair</a>
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
					<h1>Oficial cadastrado</h1> 
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
				var checkbox0 = document.form.id.checked;
				vetor.push(checkbox0);
				var checkbox1 = document.form.cidade.checked;
				vetor.push(checkbox1);
				var checkbox2 = document.form.nome.checked;
				vetor.push(checkbox2);
				var checkbox3 = document.form.ocorrencia.checked;
				vetor.push(checkbox3);
				var checkbox4= document.form.idade.checked;
				vetor.push(checkbox4);
				var checkbox5= document.form.sexo.checked;
				vetor.push(checkbox5);
				var checkbox6 = document.form.objeto.checked;
				vetor.push(checkbox6);
				var checkbox7 = document.form.tipo.checked;
				vetor.push(checkbox7);
				var checkbox8 = document.form.vitimas.checked;
				vetor.push(checkbox8);
				var chavecheckbox= false;
				
				
				
				for (i=0;i<=8;i++){

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