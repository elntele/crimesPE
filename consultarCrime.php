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
$cidade = $_GET['valor'];

$sql = "select cidade,data_ocorrencia,tipo_crime  FROM crime WHERE cidade LIKE '%".$cidade."%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table border='1'>";
    while($row = mysqli_fetch_assoc($result)) {
         
      echo " <tr> <td>" . $row["cidade"] ."</td>" . "<td>". $row["data_ocorrencia"]. "</td>" . "<td>". $row["tipo_crime"]. "</td></tr> " ;
    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
