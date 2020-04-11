<?php

	$db = mysqli_connect("localhost", "root", "", "my_folio");
	
	if(isset($_POST['send']))
	{
		$name     = mysqli_real_escape_string($db, $_POST['name']);
		$email 	  = mysqli_real_escape_string($db, $_POST['email']);
		$message  = mysqli_real_escape_string($db, $_POST['message']);


		$sql = "INSERT INTO friends (Name, Email, Message) 
		        VALUES('$name', '$email', '$message')";

		$query = mysqli_query($db, $sql)or die(mysqli_error($db));


		if($query)
		{
			echo "<script>alert('Thanks for the message, I will reply you ASAP!!!') </script>";
			echo "<script>document.location='index.php'</script>";
		}



	}

?>