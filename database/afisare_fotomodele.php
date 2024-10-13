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
				FROM Fotomodel F
				ORDER BY F.ID_Fotomodel";
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
			<th>CNP</th>
			<th>Greutate</th>	
			<th>Inaltime</th>
			<th>Sex</th>
			<th>Data_Nasterii</th>
			<th>Oras</th>
			<th>ID_Parinte</th>
			
			
			</tr>";
			while($row = sqlsrv_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $row['ID_Fotomodel'] . "</td>";
			echo "<td>" . $row['Nume'] . "</td>";
			echo "<td>" . $row['Prenume'] . "</td>";
			echo "<td>" . $row['CNP'] . "</td>";
			echo "<td>" . $row['Greutate'] . "</td>";	
			echo "<td>" . $row['Inaltime'] . "</td>";
			echo "<td>" . $row['Sex'] . "</td>";
			echo "<td>" . $row["Data_Nasterii"] . "</td>";
			echo "<td>" . $row['Oras'] . "</td>";
			echo "<td>" . $row['ID_Parinte'] . "</td>";
			echo "</tr>";

			  }
			echo "</table>";
			
			
			}
		?>	

