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
   <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
     <thead>
     <tr>
         <td>Sno</td>
         <td>Username</td>
         <td>Password</td>
         <td>Email</td>
      </tr> 
     </thead>
     <tbody>
       <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "reg";

          // Create connection
          $conn = mysql_connect($servername, $username, $password, $dbname);
          // Check connection

          mysql_select_db('reg',$conn) or die("cannot select DB");
          $query=mysql_query("select * from sign")  or die(mysql_error());
          while($res=mysql_fetch_array($query))
          {
           echo'<tr><td>'.$res['id'].'</td><td>'.$res['Uname'].'</td><td>'.$res['Password'].'</td><td>'.$res['Email'].'</td></tr>';
          }
          echo'</table>';
          ?>      
     </tbody>
   </table>
</body>
</html>