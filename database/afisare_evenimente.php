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
			$sql = "SELECT *
				FROM Eveniment E
				ORDER BY E.ID_Eveniment";
			$result = sqlsrv_query($conn,$sql);

			if ($result != TRUE) {
				echo 'Tabelul nu exista';
			}
			else{
			echo "<table border='1'>
			<tr>
			<th>ID_Eveniment</th>
			<th>Nume_Eveniment</th>
			<th>Importanta</th>
			<th>Descriere</th>
			<th>ID_Vestimentatie</th>	
			
			</tr>";
			while($row = sqlsrv_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $row['ID_Eveniment'] . "</td>";
			echo "<td>" . $row['Nume_Eveniment'] . "</td>";
			echo "<td>" . $row['Importanta'] . "</td>";
			echo "<td>" . $row['Descriere'] . "</td>";
			echo "<td>" . $row['ID_Vestimentatie'] . "</td>";	
			echo "</tr>";

			  }
			echo "</table>";
			
			
			}
		?>	

