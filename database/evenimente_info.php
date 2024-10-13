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
$ID_Eveniment = $_POST['ID_Eveniment'];

$sql = "SELECT FE.ID_FisaEveniment, FE.ID_Eveniment, FE.ID_Fotomodel, F.Nume, F.Prenume
FROM Fisa_Eveniment FE JOIN Fotomodel F ON (FE.ID_Fotomodel = F.ID_Fotomodel)
WHERE FE.ID_Eveniment ='$ID_Eveniment'";

$result = sqlsrv_query($conn,$sql);

			if ($result != TRUE) {
				echo 'Tabelul nu exista';
			}
			else{
			echo "<table border='1'>
			<tr>
			<th>ID_FisaEveniment</th>
			<th>ID_Eveniment</th>
			<th>ID_Fotomodel</th>
			<th>Nume_Fotomodel</th>
			<th>Prenume_Fotomodel</th>
			</tr>";
			while($row = sqlsrv_fetch_array($result))
			  {
				echo "<tr>";
			echo "<td>" . $row['ID_FisaEveniment'] . "</td>";
			echo "<td>" . $row['ID_Eveniment'] . "</td>";
			echo "<td>" . $row['ID_Fotomodel'] . "</td>";
			echo "<td>" . $row['Nume'] . "</td>";
			echo "<td>" . $row['Prenume'] . "</td>";
				echo "</tr>";
			  }
			echo "</table>";
			
			
			}
?>