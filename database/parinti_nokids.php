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
$sql = "SELECT P.ID_Parinte, P.Nume, P.Prenume, P.Adresa
FROM Parinte P
WHERE ID_Parinte NOT IN (SELECT P.ID_Parinte
FROM Parinte P, Fotomodel F
WHERE F.ID_Parinte = P.ID_Parinte and ID_Parinte IS NOT NULL )";

$result = sqlsrv_query($conn,$sql);

			if ($result != TRUE) {
				echo 'Tabelul nu exista';
			}
			else{
			echo "<table border='1'>
			<tr>
			<th>ID_Parinte</th>
			<th>Nume</th>
			<th>Prenume</th>
			<th>Adresa</th>
			</tr>";
			while($row = sqlsrv_fetch_array($result))
			  {
				echo "<tr>";
			echo "<td>" . $row['ID_Parinte'] . "</td>";
			echo "<td>" . $row['Nume'] . "</td>";
			echo "<td>" . $row['Prenume'] . "</td>";
			echo "<td>" . $row['Adresa'] . "</td>";
				echo "</tr>";
			  }
			echo "</table>";
			
			
			}
?>