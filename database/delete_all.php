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

<br><br><br>
	<p>Lista actuala a Parintilor</p>
<?php
			$sql = "SELECT *
				FROM Parinte P
				ORDER BY P.ID_Parinte";
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
	<p>Stergerea unui Parinte din baza de date</p>
	
	<form action="delete_parinte.php" method="post" class="formular" id="ex3" name="register_form"> 
		<div >
			Id-ul Parintelui pe care vrem sa il stergem: <input name="Id_Parinte" type="text" autocomplete="off"/>
		</div>
		<input id="RegisterButtonC" type="submit" value="Sterge">
	</form>	

<p>Lista actuala a Vestimentatiilor</p>
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
<p>Stergerea unei Vestimentatii din baza de date</p>
	
	<form action="delete_vestimentatie.php" method="post" class="formular" id="ex3" name="register_form"> 
		<div >
			Id-ul Vestimentatiei pe care vrem sa o stergem: <input name="ID_Vestimentatie" type="text" autocomplete="off"/>
		</div>
		<input id="RegisterButtonC" type="submit" value="Sterge">
	</form>	