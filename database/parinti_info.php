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
$ID_Parinte = $_POST['ID_Parinte'];

$sql = "SELECT P.ID_Parinte, F.ID_Fotomodel, F.Nume, F.Prenume, F.CNP
FROM Parinte P JOIN Fotomodel F ON (F.ID_Parinte = P.ID_Parinte)
WHERE P.ID_Parinte ='$ID_Parinte'";

$result = sqlsrv_query($conn,$sql);

			if ($result != TRUE) {
				echo 'Tabelul nu exista';
			}
			else{
			echo "<table border='1'>
			<tr>
			<th>ID_Parinte</th>
			<th>ID_Fotomodel</th>
			<th>Nume_Fotomodel</th>
			<th>Prenume_Fotomodel</th>
			<th>CNP_Fotomodel</th>
			</tr>";
			while($row = sqlsrv_fetch_array($result))
			  {
				echo "<tr>";
			echo "<td>" . $row['ID_Parinte'] . "</td>";
			echo "<td>" . $row['ID_Fotomodel'] . "</td>";
			echo "<td>" . $row['Nume'] . "</td>";
			echo "<td>" . $row['Prenume'] . "</td>";
			echo "<td>" . $row['CNP'] . "</td>";
				echo "</tr>";
			  }
			echo "</table>";
			
			
			}
?>