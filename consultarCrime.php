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

$sql = "SELECT cidade,data_ocorrencia,idade,nome_vitima,objeto_utilizado,qtd_vitimas,sexo,tipo_crime  FROM crime WHERE " .$stringDeSelecao;
$result = mysqli_query($conn, $sql);  

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table border='1' align=center>";
    echo "<tr><td>CIDADE</td> <td>DATA DA OCORRÊNCIA</td><td>IDADE</td><td>NOME DA VíTIMA</td><td>OBJETO UTILIZADO</td><td>QTD DE VÍTIMAS</td> <td>SEXO</td> <td>TIPO DE CRIME</td> </tr>";
    while($row = mysqli_fetch_assoc($result)) {
         
      echo " <tr> <td>" . $row["cidade"] ."</td>" . "<td>". $row["data_ocorrencia"]. "</td>" ."<td>". $row["idade"]."</td>"."<td>". $row["nome_vitima"]. "</td>"."<td>". $row["objeto_utilizado"]."</td>". "<td>". $row["qtd_vitimas"]. "</td>"."<td>". $row["sexo"]."</td>"."<td>" .$row["tipo_crime"]."</td></tr>" ;
    }
    echo "</table>";
} else { 
    echo "0 results";
}

mysqli_close($conn);
?>
