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
    		<h2>Informe o usuário e senha</h2>
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-6">
 
			    <!--########################-->	

			<!--    /* na primeira linha usaremos o “action=ope.php” para que o formulário repasse as informações para a pagina ope.php */
<form method="post" action="ope.php" id="formlogin" name="formlogin" >
<fieldset id="fie">
<legend>LOGIN</legend><br />
<label>NOME : </label>
// o campo “name” dentro do input e importante, pois será ele que armazenará os dados digitados . 
<input type="text" name="login" id="login"  /><br />
<label>SENHA :</label>
<input type="password" name="senha" id="senha" /><br />
<input type="submit" value="LOGAR	"  />
</fieldset>
</form>
-->

			     		<div class= "form-group"  >
			    			
			    			<form method="post" action="login.php" id="formlogin" name="formlogin">
			    				<fieldset id="fie">
			    					<legend>Login</legend>
			    					<div class="form-group">
			    						<label class="control-label">Usuário</label>
			    	    				<input class="form-control input-sm" type="text" name="nome_usuario" id="nome_usuario" placeholder="Informe o nome do usuário">
			    	    			</div>	
			    	    			<div class="form-group">
			    						<label class="control-label">Senha</label>
			    						<input class="form-control input-sm" type="password" name="senha" id="senha" placeholder="Informe a sua senha">
			    	    			</div>
			    	    			<div>
			    	    				<a href="index.html" class="btn btn-primary" role="button">Voltar</a>
			    	    				<button type="submit" class="btn btn-primary">Logar</button>
			    	    			</div>
			    	    			
									<!--<input type="button" onclick="buscarCrimes()" class="btn btn-primary">Consultar</input>
									<button  onclick="buscarCrimes()" class="btn btn-primary">Entrar</button>	-->
			    				</fieldset>
			    			</form>
			    		</div>

						<div id= "resultado"></div>

			
	</body>
</html>