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
$ID_Responsabil = $_POST['ID_Responsabil'];

$sql = "SELECT FP.ID_FisaPostului, FP.ID_Fotomodel, FP.ID_Responsabil, F.Nume, F.Prenume
FROM Fisa_Postului FP JOIN Fotomodel F ON (FP.ID_Fotomodel = F.ID_Fotomodel)
WHERE FP.ID_Responsabil ='$ID_Responsabil'";

$result = sqlsrv_query($conn,$sql);

			if ($result != TRUE) {
				echo 'Tabelul nu exista';
			}
			else{
			echo "<table border='1'>
			<tr>
			<th>ID_FisaPostului</th>
			<th>ID_Responsabil</th>
			<th>ID_Fotomodel</th>
			<th>Nume_Fotomodel</th>
			<th>Prenume_Fotomodel</th>
			</tr>";
			while($row = sqlsrv_fetch_array($result))
			  {
				echo "<tr>";
			echo "<td>" . $row['ID_FisaPostului'] . "</td>";
			echo "<td>" . $row['ID_Responsabil'] . "</td>";
			echo "<td>" . $row['ID_Fotomodel'] . "</td>";
			echo "<td>" . $row['Nume'] . "</td>";
			echo "<td>" . $row['Prenume'] . "</td>";
				echo "</tr>";
			  }
			echo "</table>";
			
			
			}
?>