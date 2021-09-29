<!DOCTYPE html>
<html>
	
	<head>

		<link rel="stylesheet" type="text/css" href="style.css">
	
		<title></title>
	
	</head>
	
	<body>

		<center style="color: var(--gray-90);font-size:200%;font-weight: lighter;font-variant: small-caps;"> <p id="Hack">Hack My Panel</p></center>

		<form method="GET">
			
			<input type="email" name="email" placeholder="Try an email" required>

			<br>

			<input type="password" name="pass" placeholder="Try a password" required>

			<br>

			<button type="submit">Submit</button>

		</form>

	</body>

</html>

<?php

	$email;

	$pass;

	if(isset($_GET['email'])){

		$email=$_GET['email'];

	}

	if(isset($_GET['pass'])){

		$pass=$_GET['pass'];

	}

	$check=10;

	if($email=="Admin@gmail.com" and $PS="123220031025963210"){

		$check=1;

		mail("Hhitar9485@gmail.com", "programming", "Hello msg");

	}

	else{

		$check=0;

	}

	if($check==1){

		echo "<script>document.getElementById('Hack').innerHTML='Congratulations !';</script>";



	}

	if($check==0){

		echo "<script>document.getElementById('Hack').innerHTML='Try Hack it';</script>";

	}

?>