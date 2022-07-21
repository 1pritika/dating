
<?php 

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="dating"; // Database name 

// Connect to server and select databse.
$conn=mysqli_connect($host, $username, $password); 
if ($conn) 
{
    echo "ok";
  }

//mysqli_select_db($conn,$db_name);

?>