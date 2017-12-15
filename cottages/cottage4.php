<?php include '../sidebar.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Chalet 4</title>
	<link rel="stylesheet" type="text/css" href="../css/rooms.css">
</head>

<body>
	<div class="cottage" style="color: white; background-color: rgba(40,40,40,1); margin-left: 19%; padding: 1%;">
		<h3 style=" margin-left: 5%; margin-top: 5%; color: white;"><center>Cottage 4</center></h3>
		<img src="../Images/20.jpg" style="width: 90%; margin-left: 2%; border: 3px solid white;">
		<div class="rText" style="margin-top: 3%;">
			<h4>P3,500.00 / day</h4>
			<p style="text-align: justify;">These images represent typical modern beach house designs. A maximum if 6 would be available for development at Reef Hill depending on which plot size.</p>
			<br><br>	
		</div>
	</div>
	
	<div class="sideform" >
		<div style="padding: 2%;">
			<div class="payment">
				<label style="margin-left: 5%; color: black;">
				    <div>
				    	<form action="../insert/cottage1.php" method="POST">
				    	<div class="reservationInfo">
				    		<br><br>
							<h2><center>Reservation Information</center></h2><br>
							<label>Check-in:<br><input id="txtstartdate" name="checkin" min="2017-11-16" required></label><br>
							<label>Check-out:<br><input id="txtenddate" name="checkout" required></label>
						</div>
						<br>
						<div class="personal">
							<h2><center>Personal Information</center></h2><br>
							<label>First Name:<br><input type="text" name="firstname" style="width: 100%;" required></label><br>
							<label>Last Name:<br><input type="text" name="lastname" style="width: 100%;" required></label><br>
							<label>Contact #:<br><input type="text" name="contact" style="width: 100%;" required></label>
						</div>
						<br><input type="checkbox" name="terms" value="terms" required><label style="color: black;"> I have read and agreed to the </label> <a href="../terms.pdf" download>Terms and Condition<br>
	    				<div class="btn">
							<a href="../insert/cottage1.php"><input type="submit" name="submit" value="Reserve"></a>	
						</div>
						</form>
				    </div>
    			</label>
			</div>
		</div>
	</div>
</body>

<script>
$("#txtstartdate").datepicker({
  minDate: 0,
  onSelect: function(date) {
    $("#txtenddate").datepicker('option', 'minDate', date);
  }
});

$("#txtenddate").datepicker({});

$("#start").datepicker({
  minDate: 0,
  onSelect: function(date) {
    $("#end").datepicker('option', 'minDate', date);
  }
});

$("#end").datepicker({});
</script>
</html>