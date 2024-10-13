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
$ID_Vestimentatie = $_POST['ID_Vestimentatie'];

$sql = "SELECT V.ID_Vestimentatie, V.Nume_Vestimentatie, E.ID_Eveniment, E.Nume_Eveniment, E.Importanta
FROM Vestimentatie V JOIN Eveniment E ON (E.ID_Vestimentatie = V.ID_Vestimentatie)
WHERE V.ID_Vestimentatie ='$ID_Vestimentatie'";

$result = sqlsrv_query($conn,$sql);

			if ($result != TRUE) {
				echo 'Tabelul nu exista';
			}
			else{
			echo "<table border='1'>
			<tr>
			<th>ID_Vestimentatie</th>
			<th>Nume_Vestimentatie</th>
			<th>ID_Eveniment</th>
			<th>Nume_Eveniment</th>
			<th>Importanta</th>
			</tr>";
			while($row = sqlsrv_fetch_array($result))
			  {
				echo "<tr>";
			echo "<td>" . $row['ID_Vestimentatie'] . "</td>";
			echo "<td>" . $row['Nume_Vestimentatie'] . "</td>";
			echo "<td>" . $row['ID_Eveniment'] . "</td>";
			echo "<td>" . $row['Nume_Eveniment'] . "</td>";
			echo "<td>" . $row['Importanta'] . "</td>";
				echo "</tr>";
			  }
			echo "</table>";
			
			
			}
?>