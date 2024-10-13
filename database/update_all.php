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
	<p>Modificarea unui Parinte din baza de date</p>
	<p>Schimbarea se face dupa ID</p>

	<form action="update_parinte.php" method="post" class="formular" id="ex3" name="register_form"> 

		<div >
			Id_Parinte: <input name="Id_Parinte" type="text" placeholder="Obligatoriu"  autocomplete="off"/>
		</div>
		<div >
			Nume: <input name="Nume" type="text"  autocomplete="off"/>
		</div>
		<div >
			Prenume: <input name="Prenume" type="text"  autocomplete="off"/>
		</div>
		<div >
			Adresa: <input name="Adresa" type="text"  autocomplete="off"/>
		</div>
		<div class="form-actions">
            <button class="btn btn-primary" type="submit">Modifica</button>
		</div>
	</form>	

<br><br><br>
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


	<p>Modificarea unei Vestimentatii din baza de date</p>
	<p>Schimbarea se face dupa ID</p>

	<form action="update_vestimentatie.php" method="post" class="formular" id="ex3" name="register_form"> 

		<div >
			ID_Vestimentatie: <input name="ID_Vestimentatie" type="text" placeholder="Obligatoriu"  autocomplete="off"/>
		</div>
		<div >
			Nume_Vestimentatie: <input name="Nume_Vestimentatie" type="text"  autocomplete="off"/>
		</div>
		<div >
			Descriere: <input name="Descriere" type="text"  autocomplete="off"/>
		</div>
		<div class="form-actions">
            <button class="btn btn-primary" type="submit">Modifica</button>
		</div>
	</form>