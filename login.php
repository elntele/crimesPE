<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior

$login = $_POST['nome_usuario'];
$senha = $_POST['senha'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cvlipe";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$result = mysqli_query($conn, "SELECT * FROM usuario WHERE usuario = '$login' AND senha= '$senha'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */

if(mysqli_num_rows ($result) > 0 ) {
  $_SESSION['login'] = $login;
  $_SESSION['senha'] = $senha;
  header('location:formPreAlterarStatusCrime.php');
}
else{
  
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:falhaNoLogin.html');
  
}

?>