<?php
//connecting to the database
define('DB_HOST', 'localhost');
define('DB_NAME', 'Company');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
//inserting Record to the database
$username= $_POST['name'];
$password = $_POST['password'];

$q = "INSERT INTO login(username,password)VALUES('$username','$password')";
$r = mysql_query($q);
if($r)
	{
	    echo "<br>";
	}
	else
	{
	 die('Error: '.mysql_error($con));
	}

$sql = "SELECT username FROM alogin where username='$username' and password='$password'";
  if($res = mysql_query($sql))
  {
    if(mysql_num_rows($res) > 0)
    {
	echo "WELCOME $username<br>";
	echo "<br><br> List Of Orders we got.";	
$sqq= "SELECT * FROM details";
    if($ree = mysql_query($sqq))
           {
            echo "<table border = 1>";
            echo "<tr>";
                echo "<th>FullName</th>";
 		echo "<th>Email</th>";
		echo "<th>Number</th>";
		echo "<th>Messege</th>";
		echo "</tr>";
        while($row = mysql_fetch_array($ree))
       {
            echo "<tr>";
                echo "<td>" . $row['fullname'] . "</td>";
		echo "<td>" . $row['email'] . "</td>";
		echo "<td>" . $row['usrtel'] . "</td>";
		echo "<td>" . $row['messege'] . "</td>";
		
	        echo "</tr>";
        }
        echo "</table>";
	 // Close result set
        mysql_free_result($ree);
    } 
  else{
        echo "<br><br>Error .....";
    }


  } 
    else
   {
        echo "<br>No records were found.";
       echo "<br>Incorrect Username or Password";
    }

 }
  else{
         echo "ERROR: Could not able to execute $sql. " . mysql_error($con);
        }

mysql_close($con);
?>





