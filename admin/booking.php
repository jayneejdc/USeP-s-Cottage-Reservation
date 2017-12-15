<?php include 'header.php';?>
<br><br>
<?php $db= new mysqli('localhost','root','','usep_cottage'); ?>
<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'usep_cottage';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM cottage1";
$result = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Del Leonor Hotel | Admin</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin_style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="admin.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="../Styles/header.css" type="text/css" rel="stylesheet">
    <script src="bootstrap/js/jquery-ui.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br /></br>
   <div class="container">
      <br />
       <div align="left" style="margin-left: -28.5%;">
      <?php include 'add/modal_suite.php';?>
  </div>
     <div class="panel panel-default" style=" width: 100%; margin-left: -14%;">
     <div class="panel-heading" style="background-color: grey; color: rgb(255, 215, 32);">CHALET 1 DETAILS</div>
     <div class="panel-body" style="margin-top: 2%;">
       <span id="message"></span>
       <div class="table-responsive" id="user_data">
        <table class="table table-bordered table-striped">
           <tr style="background-color: grey; color: rgb(255, 215, 32);">
                <td>CHALET NUMBER</td>
                <td>LASTNAME</td>
                <td>FIRSTNAME</td>
                <td>CONTACT</td>
                <td>CHECK-IN</td>
                <td>CHECK-OUT</td>
                <td>STATUS</td>
     
            </tr>
            <?php 
              $query = "SELECT * FROM cottage1 ORDER BY num";
              $result = mysqli_query($mysqli, $query);
              while ($row = mysqli_fetch_array($result)) : ?>
                <tr>
                    <form method="post" action="samok.php">
                      <?php if (!empty($row[1])) : ?>
                      <td><?php echo $row[0]?></td>
                      <td><?php echo $row[1]?></td>
                      <td><?php echo $row[2]?></td>
                      <td><?php echo $row[3]?></td>
                      <td><?php echo $row[4]?></td>
                      <td><?php echo $row[5]?></td>
                      <td><input type="submit" class="btn btn-danger" name="action" value="Checkout"/></td>
                      <input type="hidden" class="btn btn-danger" name="picked" value="<?php echo $row['num']; ?>"/>
                    </form>
                </tr>
              <?php endif; ?>
              <?php endwhile; ?>
        </table>
     
<br/><br/>

      </tbody>

     </div>
     </div>
     </div>
  </div>
 </body>
 <script type="text/javascript">
      $(document).on('click','.status_checks',function(){
      var num = ($(this).hasClass("btn-success")) ? '0' : '1';
      var msg = (num=='0')? 'checkout' : 'checkout';
      if(confirm("Are you sure to "+ msg)){
        var current_element = $(this);
        url = "ajax_checkout.php";
        $.ajax_check({
        type:"POST",
        url: url,
        data: {num:$(current_element).attr('data'),num:num},
        success: function(data)
          {   
            location.reload();
          }
        });
        }      
});

</script>
  <script>
  function OpenAlert(){
        alert("Are you sure to CHECK-OUT? ");
        document.getElementById("getMessage").style.visibility="hidden";
         
    }
 </script>
</html>