<?php include 'header.php';?>
<br><br>
<?php $db= new mysqli('localhost','root','','usep_cottage'); ?>
<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'usep_cottage';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM booking";
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
  
     <div class="panel panel-default" style=" width: 100%; margin-left: -15%;">
     <div class="panel-heading" style="background-color: grey; color: rgb(255, 215, 32);">CHALET AVAILABILITY</div>
     <div class="panel-body" style="margin-top: 2%;">
       <span id="message"></span>
       <div class="table-responsive" id="user_data">
        <table class="table table-bordered table-striped">
           <tr style="background-color: grey; color: rgb(255, 215, 32);">
                <td>CHALET NUMBER</td>
                <td>CHALET AVAILABILITY</td>
                
            </tr>
            <?php 
              $query = "SELECT * FROM cottage1 ORDER BY num";
              $result = mysqli_query($mysqli, $query);
              while ($row = mysqli_fetch_array($result)) : ?>
                <tr>
                    <form method="post" action="samok.php">
                      <?php if (!empty($row[1])) : ?>
                      <td><?php echo $row[0]?></td>
                      
                      <td><?php echo $row[11]?></td>
                      
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