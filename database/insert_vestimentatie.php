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
// verifica daca exista date transmise
if ($_POST['ID_Vestimentatie'] != "" 
 && $_POST['Nume_Vestimentatie'] != "" 
 && $_POST['Descriere'] != "" 
 )

// preia datele din formular
	$ID_Vestimentatie = $_POST['ID_Vestimentatie'];
	$Nume_Vestimentatie = $_POST['Nume_Vestimentatie'];
	$Descriere = $_POST['Descriere'];
       
    $query = "INSERT INTO Vestimentatie(ID_Vestimentatie, Nume_Vestimentatie, Descriere) VALUES ('".$ID_Vestimentatie."','".$Nume_Vestimentatie."','".$Descriere."');";
    $results = sqlsrv_query($conn,$query);
	
    if($results)
		echo ' Inserare cu Succes';
	else
		echo ' Eroare la Inserare';
?>

