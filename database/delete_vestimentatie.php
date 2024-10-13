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
if(isset($_POST["ID_Vestimentatie"])) //se verifica id-ul din link
	{
		$ID_Vestimentatie = $_POST["ID_Vestimentatie"]; //aici se pune 
		
		$sql = "DELETE FROM Vestimentatie WHERE ID_Vestimentatie= '$ID_Vestimentatie'";
		$results = sqlsrv_query($conn,$sql);
	if($results)
		echo ' Delete cu Succes';
	else
		echo ' Eroare la Delete';
	}
?>