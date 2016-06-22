<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg";

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);
// Check connection

mysql_select_db('reg',$conn) or die("cannot select DB");

$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM sign WHERE Uname='$username' AND Password='$password'";
	$result = mysql_query($query)or die(mysql_error());
	$num_row = mysql_num_rows($result);
		$row=mysql_fetch_array($result);


if ($num_row>0) {
    echo "LoggedIn successfully";
} else {
    echo "Please check your Username and Password" ;
}

?>