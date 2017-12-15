<?php include 'header.php';?>
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'usep_cottage';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>

<!DOCTYPE html>
<html>
<title>Del Leonor Hotel | Admin</title>
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
    <br><br><br><br><br>

  <div class="panel panel-default" style="width: 100%;margin-left: -15%;">
     <div class="panel-heading" style="background-color: grey; color: rgb(255, 215, 32);text-align: left;">ARCHIVED DETAILS</div>
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
<?php 
$query = "SELECT * FROM history ORDER BY num";
$result = mysqli_query($mysqli, $query);
while ($row = mysqli_fetch_array($result)) : ?>

  <tr>
      <form method="post" action="old.php">
        <?php if ($row[10]=="1") : ?>
        <td><?php echo $row[1]?></td>
        <td><?php echo $row[2]?></td>
        <td><?php echo $row[3]?></td>
        <td><?php echo $row[4]?></td>
        <td><?php echo $row[5]?></td>
        <td><?php echo $row[6]?></td>
        <td><?php echo $row[7]?></td>
        <td><?php echo $row[8]?></td>
        <td><?php echo $row[9]?></td>
        <td><input type="submit" class="btn btn-info" name="action" value="UNARCHIVE"/></td>
        <input type="hidden" name="picked" value="<?php echo $row['booking_id']; ?>"/>
      </form>
  </tr>
<?php endif; ?>
<?php endwhile; ?>
</body>
</html>