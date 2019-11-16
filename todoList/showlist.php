<!DOCTYPE html>
<html>
<head>
	<title>My TODO List</title>
</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	$('.box').change( function (event) {
		// var id = $(this).attr('name');
		alert(id);
	})
</script>

</body>
</html>
<?php

session_start();

$todo = $_SESSION['todo'];

foreach ($todo as $key => $value) {
	echo "<input type='checkbox' name'$key' class='box' ";
	echo ($value['status'] == 1)?" checked":"";
	echo " >";
	echo $value['task'];
	echo "<br/>";
}
?>