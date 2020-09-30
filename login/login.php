<?php 
if (isset($_POST['submit']))
{

$rcno=$_POST['rcno'];
$ino=$_POST['ino'];
$icompany=$_POST['icompany'];
$icity=$_POST['icity'];
$idate=$_POST['idate'];






$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "rtosystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
	die("connection failed: ".$conn->connect_error);
}
 echo "connect successfully";

$sql="UPDATE insurance SET ino='$ino',icompany='$icompany',icity='$icity',idate='$idate' WHERE rcno='$rcno'";
if($conn->query($sql)===TRUE)
{
	echo"data Updated";
	header('Refresh: 2; URL=insurance.php'); 
}
}
?>
