<?php
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
$stringDeSelecao = $_GET['valor'];
//echo $_GET['valor'];

$sql = "SELECT crime_id,cidade,data_ocorrencia,idade,nome_vitima,objeto_utilizado,qtd_vitimas,sexo,tipo_crime,status  FROM crime WHERE " .$stringDeSelecao;
$result = mysqli_query($conn, $sql);  

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<!DOCTYPE html>";
    echo"<html>";
    echo"<head>";
    	echo"<title>Bootstrap Example</title>";
	 	 echo"<meta charset='utf-8'>";
  		echo"<meta name='viewport' content='width=device-width, initial-scale=1'>";
  		echo"<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
  		echo"<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>";
  		echo"<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>";
    echo"</head>";
    echo"<body>";
    echo "<div class='container'>";
    echo "<table class='table table-striped'>";
    echo "<tr><td>id</td><td>CIDADE</td> <td>DATA DA OCORRÊNCIA</td><td>IDADE</td><td>NOME DA VíTIMA</td><td>OBJETO UTILIZADO</td><td>QTD DE VÍTIMAS</td> <td>SEXO</td> <td>TIPO DE CRIME</td><td>STATUS</td></tr>";

    while($row = mysqli_fetch_assoc($result)) {
         
      echo " <tr> <td>" . $row["crime_id"] ."</td>"."<td>". $row["cidade"] ."</td>" . "<td>". $row["data_ocorrencia"]. "</td>" ."<td>". $row["idade"]."</td>"."<td>". $row["nome_vitima"]. "</td>"."<td>". $row["objeto_utilizado"]."</td>". "<td>". $row["qtd_vitimas"]. "</td>"."<td>". $row["sexo"]."</td>"."<td>" .$row["tipo_crime"]."</td>" ."<td>". $row["status"]."</td> </tr>" ;
    }
    echo "</table>";
} else { 
    echo "0 results";
}

mysqli_close($conn);
  echo "</div >";  
 echo   "</body>";
 echo  "</html>";
    
?>
