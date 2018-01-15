<?php
//connecting to the database
define('DB_HOST', 'localhost');
define('DB_NAME', 'hospital');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());

$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
//inserting Record to the database
$fname= $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$relative = $_POST['rname'];
$dobm = $_POST['DOBMonth'];
$dobd = $_POST['DOBDay'];
$doby = $_POST['DOBYear'];
$marital = $_POST['marital'];
$blood = $_POST['blood'];
$address=$_POST['address'];
$state=$_POST['state'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];

$query = "INSERT INTO patient(fname,lname,gender,relative,dobm,dobd,doby,marital,blood,address,state,city,pincode)VALUES('$fname','$lname','$gender','$relative','$dobm','$dobd','$doby','$marital','$blood','$address','$state','$city','$pincode')";
$result = mysql_query($query);
if($result)
	{
	    echo "Registered Succesfully(Welcome to SANJEEVANI HOSPITAL)";
	    echo "<br><A href='E.html'><font color='RED'>Back To HOME </A>";
        }
	else
	{
	 die('Error: '.mysql_error($con));
	}
  
	mysql_close($con);
?>


