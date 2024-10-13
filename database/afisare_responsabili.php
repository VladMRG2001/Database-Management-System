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
				FROM Responsabil R
				ORDER BY R.ID_Responsabil";
			$result = sqlsrv_query($conn,$sql);

			if ($result != TRUE) {
				echo 'Tabelul nu exista';
			}
			else{
			echo "<table border='1'>
			<tr>
			<th>ID_Responsabil</th>
			<th>Nume</th>
			<th>Prenume</th>	
			
			</tr>";
			while($row = sqlsrv_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $row['ID_Responsabil'] . "</td>";
			echo "<td>" . $row['Nume'] . "</td>";
			echo "<td>" . $row['Prenume'] . "</td>";	
			echo "</tr>";

			  }
			echo "</table>";
			
			
			}
		?>	

