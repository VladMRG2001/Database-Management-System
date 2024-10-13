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
				FROM Vestimentatie V
				ORDER BY V.ID_Vestimentatie";
			$result = sqlsrv_query($conn,$sql);

			if ($result != TRUE) {
				echo 'Tabelul nu exista';
			}
			else{
			echo "<table border='1'>
			<tr>
			<th>ID_Vestimentatie</th>
			<th>Nume_Vestimentatie</th>
			<th>Descriere</th>	
			
			</tr>";
			while($row = sqlsrv_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $row['ID_Vestimentatie'] . "</td>";
			echo "<td>" . $row['Nume_Vestimentatie'] . "</td>";
			echo "<td>" . $row['Descriere'] . "</td>";	
			echo "</tr>";

			  }
			echo "</table>";
			
			
			}
		?>	

