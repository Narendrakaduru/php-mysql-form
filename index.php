 <!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP-MYSQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <script src="dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" rel="stylesheet" href="js/jQuery.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
</head>
  <body>
    <div class="container">
         <div class="row">
              <div class="col-md-9 col-xs-12">
           <div id="content" action="conn.php" method="post">
            <div id="mail">
              <form id="myForm" onsubmit="return validateForm()" method="post" action="conn.php">
                 <h4>Signup</h4>
                  <p><div class="form-group has-warning has-feedback">
                  <label for="validate-optional">UserName</label>
                  <div class="input-group">
                  <input type="text" class="form-control" name="username" placeholder="UserName" required>
                  <span class="input-group-addon info"><span class="glyphicon glyphicon-user"></span></span>
                  </div>
                  </div>
                  </p>

                  <p><div class="form-group has-warning has-feedback">
                  <label for="validate-optional">Password</label>
                  <div class="input-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                  <span class="input-group-addon info"><i class="fa fa-key" aria-hidden="true"></i></span>
                  </div>
                  </div>
                  </p>

                  <p><div class="form-group has-warning has-feedback">
                  <label for="validate-optional">Confirm Password</label>
                  <div class="input-group">
                  <input type="password" class="form-control" name="confirm" placeholder="Confirm Password" required>
                  <span class="input-group-addon info"><i class="fa fa-key" aria-hidden="true"></i></span>
                  </div>
                  </div>
                  </p>

                  <p><div class="form-group has-warning has-feedback">
                  <label for="validate-optional">Email</label>
                  <div class="input-group">
                  <input type="text" class="form-control" name="Email" placeholder="Email" required>
                  <span class="input-group-addon info"><span class="glyphicon glyphicon-envelope"></span></span>
                  </div>
                  </div>
                  </p>

            <p align="right"><input type="submit" class="btn btn-warning" onclick="myFunction()" value="reset">
            <input type="submit" class="btn btn-warning" onclick="validateForm()" value="Signup"></p>
            </form>

            <script>
            function myFunction() {
                document.getElementById("myForm").reset();
            }
            </script>
         </div>
        </div>

        </div>
</div>
  <div class="col-md-3 col-xs-12">
                    <div id="content" action="check.php" method="post">
            <div id="mail">
              <form id="myForm" onsubmit="return validateForm()" method="post" action="check.php">
                 <h4>Signup</h4>
                  <p><div class="form-group has-success has-feedback">
                  <label for="validate-optional">UserName</label>
                  <div class="input-group">
                  <input type="text" class="form-control" name="username" placeholder="UserName" required>
                  <span class="input-group-addon info"><span class="glyphicon glyphicon-user"></span></span>
                  </div>
                  </div>
                  </p>

                  <p><div class="form-group has-success has-feedback">
                  <label for="validate-optional">Password</label>
                  <div class="input-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                  <span class="input-group-addon info"><i class="fa fa-key" aria-hidden="true"></i></span>
                  </div>
                  </div>
                  </p>

            <p align="right"><input type="submit" class="btn btn-success" onclick="myFunction()" value="reset">
            <input type="submit" class="btn btn-success" onclick="validateForm()" value="Signin"></p>
            </form>

            <script>
            function myFunction() {
                document.getElementById("myForm").reset();
            }
            </script>
         </div>
        </div>

        </div>
  </div>


    </div>
    </div>
  </body>
</html>  