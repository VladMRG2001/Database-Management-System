<?php
	$serverName = "localhost";
	$connectionOptions = [
	"Database"=>"DataBase",
	"Uid"=>"",
	"PWD"=>"",
	'encrypt' => 'no'
	];
	$conn = sqlsrv_connect($serverName, $connectionOptions);
	if($conn == false)
		die(print_r(sqlsrv_errors(), true));
	else echo 'Conectat cu Succes ';
?>
<?php
$sql = "SELECT F.ID_Fotomodel, F.Nume,F.Prenume, F.Inaltime
FROM Fotomodel F
WHERE F.Inaltime IN (SELECT distinct top 3 Inaltime from Fotomodel order by Inaltime DESC)
ORDER BY Inaltime DESC";

$result = sqlsrv_query($conn,$sql);

			if ($result != TRUE) {
				echo 'Tabelul nu exista';
			}
			else{
			echo "<table border='1'>
			<tr>
			<th>ID_Fotomodel</th>
			<th>Nume</th>
			<th>Prenume</th>
			<th>Inaltime</th>
			</tr>";
			while($row = sqlsrv_fetch_array($result))
			  {
				echo "<tr>";
			echo "<td>" . $row['ID_Fotomodel'] . "</td>";
			echo "<td>" . $row['Nume'] . "</td>";
			echo "<td>" . $row['Prenume'] . "</td>";
			echo "<td>" . $row['Inaltime'] . "</td>";
				echo "</tr>";
			  }
			echo "</table>";	
			
			}

?>