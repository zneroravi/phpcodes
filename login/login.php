<?php 

$location = "localhost";
$user ="root";
$pass = "";
$db = "a123";

 $conn = new mysqli($location, $user, $pass, $db);

 if ($conn->connect_error) {
 	die($conn->connect_error);
 	
 } else
 echo "localhost connected";
 echo "<br>";

 $sql= ("Select id, user FROM user where `user` = '$_POST[username]' AND `pass` = '$_POST[password]'");
 
      $res = $conn->query($sql);

	if ($res->num_rows >0){
		while ($row = $res->fetch_assoc()) {
			echo "Welcome $row[user] ";
			echo "Click here to <a href='login.html'> log out </a>";
		}
	} else {
		echo "Sorry the username or the password is incorrect ";
		echo "Please try again on the following link <a href='login.html'> Try Again </a>";
	}
