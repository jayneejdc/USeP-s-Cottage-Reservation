<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_reservation';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM standard ORDER BY num";
$options="";
$result = mysqli_query($mysqli, $query);

while ($row = mysqli_fetch_array($result)) {
	$options = $row[0];
}
$for=$_POST['add'];
$none=NULL;
$status="0";
$temp=$options;
for ($x = 1; $x <= $for; $x++) { 
	$temp+=1;
	$sql = "INSERT INTO standard(num, firstname, lastname, checkin, checkout, numguest, payment, cardnum, valid, expdate, cardname, contact, status) VALUES ('$temp','$none','$none','$none','$none','$none','$none','$none','$none','$none','$none','$none','$status')";
	if ( $mysqli->query($sql) ){
		header("location: ../booking.php");
	}
}
?>