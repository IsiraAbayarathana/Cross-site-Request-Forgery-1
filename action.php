<?php


if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'isira' && $pwd == 'test'){
		echo 'Successfully logged in';

	}
	else{
		echo 'Invalid Credentials';
		exit();
	}

}


?>


<!DOCTYPE html>
<html>
	<head>
		<title>Cross Site Request Forgery Protection Assignment 1</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>

	$(document).ready(function(){

	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("token_to_be_added").setAttribute('value', this.responseText) ;
		}


	};

	xhttp.open("GET", "csrf_generator.php", true);
	xhttp.send();

	});
</script>
	</head>
	<body>
		<form action="home.php" method="post">
			<div class="post">
				<strong>What is on your mind ?</strong>
					<div class="text">
							Post: <input type="text" name="updatepost">
					</div>
					<input type="Submit" value="Post it Here">

					<div id="div1">
					<input type="hidden" name="token" value="" id="token_to_be_added"/>
					</div>
			</div>
		</form>
	</body>
</html>
