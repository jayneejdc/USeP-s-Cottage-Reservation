<?php include 'header.php';?>
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_reservation';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
		
?>

<!DOCTYPE html>
<html>
<title>Del Leonor Hotel | Admin</title>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin_style.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap.min.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="admin.css" type="text/css" rel="stylesheet">
  
  <script src="bootstrap/js/jquery-ui.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  <br />
  <div class="container">
    <br><br><br><br><br><br>
    <div class="panel panel-default" style="width: 100%; margin-left: -20%;">
      <div class="panel-heading" style="background-color: grey; color: rgb(255, 215, 32);">HISTORY</div>
        <div class="panel-body" style="margin-top: 2%;">
          <span id="message"></span>
       <div class="table-responsive" id="user_data">
        <table class="table table-bordered table-striped">
           <tr style="background-color: grey; color: rgb(255, 215, 32);">
              <td>ROOM NUMBER</td>
              <td>LASTNAME</td>
              <td>FIRSTNAME</td>
              <td>CHECK-IN</td>
              <td>CHECK-OUT</td>
              <td>NO. OF GUEST</td>
              <td>PAYMENT</td>
              <td>ROOM TYPE</td>
              <td>ACTIVITY</td>
              <td>STATUS</td>
            </tr>
            <?php 
            $query = "SELECT * FROM history";
            $result = mysqli_query($mysqli, $query);
            while ($row = mysqli_fetch_array($result)) : ?>

              <tr>
                  <form method="post" action="new.php">
                  	<?php if ($row[10]=="0") : ?>
                    <td><?php echo $row[1]?></td>
                    <td><?php echo $row[2]?></td>
                    <td><?php echo $row[3]?></td>
                    <td><?php echo $row[4]?></td>
                    <td><?php echo $row[5]?></td>
                    <td><?php echo $row[6]?></td>
                    <td><?php echo $row[7]?></td>
                    <td><?php echo $row[8]?></td>
                    <td><?php echo $row[9]?></td>
                    <td><input type="submit" name="action" value="Archive"/></td>
                    <input type="hidden" name="picked" value="<?php echo $row['booking_id']; ?>"/>
                  </form>
              </tr>
            <?php endif; ?>
            <?php endwhile; ?>
          </table>
        </div>
      </div>
    </div>
</body>
</html>