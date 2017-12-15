<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'usep_cottage';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = 'SELECT * FROM cottage1';
$result = mysqli_query($mysqli, $query);


$sql = "UPDATE cottage1 SET lastname='NULL', firstname='NULL' ,contact='NULL', checkin = 'NULL' , checkout = 'NULL' , WHERE num='9'";
if ( $mysqli->query($sql) ){
	echo "working";
}
?>