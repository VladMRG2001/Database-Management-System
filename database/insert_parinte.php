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
if ($_POST['Id_Parinte'] != "" 
 && $_POST['Nume'] != "" 
 && $_POST['Prenume'] != "" 
 && $_POST['Adresa'] != ""  
 )

// preia datele din formular
	$Id_Parinte = $_POST['Id_Parinte'];
	$Nume = $_POST['Nume'];
	$Prenume = $_POST['Prenume'];
	$Adresa = $_POST['Adresa'];
       
    $query = "INSERT INTO Parinte(ID_Parinte, Nume, Prenume, Adresa) VALUES ('".$Id_Parinte."','".$Nume."','".$Prenume."','".$Adresa."');";
    $results = sqlsrv_query($conn,$query);
	
    if($results)
		echo ' Inserare cu Succes';
	else
		echo ' Eroare la Inserare';
?>

