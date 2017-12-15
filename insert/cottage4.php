<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'usep_cottage';

$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM cottage4";
$result = mysqli_query($mysqli, $query);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contact = $_POST['contact'];	
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$type="Cottage 4";

while ($row = mysqli_fetch_array($result)) {
	if (empty($row[1])) {
		$temp=$row[0];
		$sql = "CALL insert4 ('".$temp."','".$firstname."','".$lastname."','".$checkin."','".$checkout."','".$contact."')";
		if ( $mysqli->query($sql) ){
			break;
		}else{
			echo "NOOOOOO!";
		}
	}
}
if (empty($temp)) {
	header("location: ../alert.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Styles/receipt.css">
	<title>Confirmation</title>
</head>
<body>
	<div class="box" style="background-color: rgba(40,40,40,1); color: white; margin-left: 5%;">
		<div id="indent">
			<h2><center>Confirmation</center></h2>
			<br><hr style="width: 80%;"><br>
			<p>Room Type: Standard </p>
			<p>Check in: <?php echo $checkin; ?></p>
			<p>Check out: <?php echo $checkout; ?></p>
			<p>Name: <?php echo $firstname." ".$lastname; ?></p>
			<p>Contact: <?php echo $contact; ?></p>
			<p>Room Number: <?php echo $temp; ?></p>
			<p>Price: Php2,000.00</p>
			<br><br>
		</div>
	</div>
	<div class="complete" style="background-color: rgba(40,40,40,1); color: white; padding: 3%; border: 2px solid rgb(218, 165,32); margin-right: 2%;">
		<h1>Reservation Complete</h1>
		<hr>
		<p>Details about your reservation was sent via email. To complete this transaction pls go to our hotel within 24hours for validation</p>
		<br>
		<label>For more information you can contact us via </label><a href="">contact form</a>
		<br><br>
	</div>
</body>
</html>