<!DOCTYPE html>
<html>
<head>
	<title>My TODO List</title>
</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {
		$('.box').on('change', function (event) {
			var id = $(this).attr('id');
			var status = 0;

			if($(this).prop("checked") == true){
                status = 1;
            }
            else if($(this).prop("checked") == false){
                status = 0;
            }
			$.ajax({
			    url: "markComp.php",
			    type: "get", //send it through get method
			    data: { 
			        id: id, 
			        status: status
			    },
			    success: function(response) {
			        alert('status updated');
			        console.log(response);
			    },
			    error: function(xhr) {
			        alert('some error occured');
			        console.log(xhr);
			    }
			});
		});
	});
</script>

</body>
</html>
<?php

session_start();

$todo = $_SESSION['todo'];

foreach ($todo as $key => $value) {
	echo "<input type='checkbox' id='$key' class='box' ";
	echo ($value['status'] == 1)?" checked":"";
	echo " >";
	echo $value['task'];
	echo "<br/>";
}
?>