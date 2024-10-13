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

if ($_POST['ID_Vestimentatie'] != "" 
 && $_POST['Nume_Vestimentatie'] != "" 
 && $_POST['Descriere'] != "" 
 )
 
// preia datele din formular
	$ID_Vestimentatie = $_POST['ID_Vestimentatie'];
	$Nume_Vestimentatie = $_POST['Nume_Vestimentatie'];
	$Descriere = $_POST['Descriere'];
    
    $query = "UPDATE Vestimentatie SET ID_Vestimentatie='$ID_Vestimentatie', Nume_Vestimentatie='$Nume_Vestimentatie', Descriere='$Descriere' WHERE ID_Vestimentatie='$ID_Vestimentatie'";
	$results = sqlsrv_query($conn,$query);

	if($results)
		echo ' Update cu Succes';
	else
		echo ' Eroare la Update';
?>