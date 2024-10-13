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
if(isset($_POST["Id_Parinte"])) //se verifica id-ul din link
	{
		$Id_Parinte = $_POST["Id_Parinte"]; //aici se pune 
		
		$sql = "DELETE FROM Parinte WHERE Id_Parinte= '$Id_Parinte'";
		$results = sqlsrv_query($conn,$sql);
	if($results)
		echo ' Delete cu Succes';
	else
		echo ' Eroare la Delete';
	}
?>