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
$ID_Fotomodel = $_POST['ID_Fotomodel'];

$sql = "SELECT FP.ID_FisaPostului, FP.ID_Fotomodel, FP.ID_Responsabil, R.Nume, R.Prenume
FROM Fisa_Postului FP JOIN Responsabil R ON (FP.ID_Responsabil = R.ID_Responsabil)
WHERE FP.ID_Fotomodel ='$ID_Fotomodel'";

$result = sqlsrv_query($conn,$sql);

			if ($result != TRUE) {
				echo 'Tabelul nu exista';
			}
			else{
			echo "<table border='1'>
			<tr>
			<th>ID_FisaPostului</th>
			<th>ID_Fotomodel</th>
			<th>ID_Responsabil</th>
			<th>Nume_Responsabil</th>
			<th>Prenume_Responsabil</th>
			</tr>";
			while($row = sqlsrv_fetch_array($result))
			  {
				echo "<tr>";
			echo "<td>" . $row['ID_FisaPostului'] . "</td>";
			echo "<td>" . $row['ID_Fotomodel'] . "</td>";
			echo "<td>" . $row['ID_Responsabil'] . "</td>";
			echo "<td>" . $row['Nume'] . "</td>";
			echo "<td>" . $row['Prenume'] . "</td>";
				echo "</tr>";
			  }
			echo "</table>";
			
			
			}
?>