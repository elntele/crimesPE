<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cvlipe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


 //Outra forma de escrever
$sql = "INSERT INTO crime (cidade, data_ocorrencia, idade, nome_vitima, objeto_utilizado, qtd_vitimas, sexo,tipo_crime)
VALUES ('$_POST[cidade]', '$_POST[data_ocorrencia]', '$_POST[idade]', '$_POST[nome_vitima]', '$_POST[objeto_utilizado]', '$_POST[qtd_vitimas]', '$_POST[sexo]', '$_POST[tipo_crime]')";
$conn->query($sql); 
$conn->close();
header('Location: index.html');
?>
