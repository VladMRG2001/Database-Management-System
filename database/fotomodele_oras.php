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

$Oras = $_POST['Oras'];

$sql = "SELECT F.ID_Fotomodel, F.Oras, F.ID_Parinte,P.Nume,P.Prenume, P.Adresa
FROM Fotomodel F JOIN Parinte P ON (F.ID_Parinte=P.ID_Parinte)
WHERE F.Oras ='$Oras'";

$result = sqlsrv_query($conn,$sql);

			if ($result != TRUE) {
				echo 'Tabelul nu exista';
			}
			else{
			echo "<table border='1'>
			<tr>
			<th>ID_Fotomodel</th>
			<th>Oras_Fotomodel</th>
			<th>ID_Parinte</th>
			<th>Nume_Parinte</th>
			<th>Prenume_Parinte</th>
			<th>Adresa_Parinte</th>

			
			
			
			</tr>";
			while($row = sqlsrv_fetch_array($result))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['ID_Fotomodel'] . "</td>";
			echo "<td>" . $row['Oras'] . "</td>";
			echo "<td>" . $row['ID_Parinte'] . "</td>";
			echo "<td>" . $row['Nume'] . "</td>";
			echo "<td>" . $row['Prenume'] . "</td>";
			echo "<td>" . $row['Adresa'] . "</td>";
				echo "</tr>";

			  }
			echo "</table>";
			
			
			}

?>