<?php
//connecting to the database
define('DB_HOST', 'localhost');
define('DB_NAME', 'hospital');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());

$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
//inserting Record to the database
$dname= $_POST['drugn'];
$drugno = $_POST['drugno'];
$expiry = $_POST['Expiry'];
$update = $_POST['update'];

$query = "INSERT INTO drug(Name,TotalNumber,Expiry,UpdateOn)VALUES('$dname','$drugno','$expiry','$update')";
$result = mysql_query($query);
if($result)
	{
	    echo "Updated Succesfully";
	 }
	else
	{
	 die('Error: '.mysql_error($con));
	}
   	mysql_close($con);
?>


