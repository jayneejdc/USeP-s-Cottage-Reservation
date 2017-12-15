
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css" type="text/css" rel="stylesheet">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="width: 10%;">Add Rooms</button>
      <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Rooms</h4>
              </div>
              <form class="form" action="read.php" method="post">
                <label>Email: <input type="email" style="margin-left: 13%;" name="email"></label><br><br>
                <label>Password: <input type="password" name="password"></label><br>
                <a href="forgot.php" style="font-size: 14px; float: right; color: blue;">Forgot password?</a><br><br>
                <center><input type="submit" name="submit" value="Login"></center>
            <br><br>
            </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

</body>
</html>
