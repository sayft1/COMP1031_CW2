<?php
$servername = "localhost";
$username = "sayft1";
$password = "masonjackie666%$#@!";
$dbname = "sayft1_WORLD_Assignment2";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn){
			die("Conection failed: ". mysqli_connect_error);
		}

		$ID = $_POST['ID'];


		$sql = "DELETE FROM CITY WHERE ID = '$ID' LIMIT 1";

		mysqli_set_charset($conn,"utf8");

		$result = mysqli_query($conn, $sql);

		if (mysqli_affected_rows($conn)==1)
			$message = "Delete Successfully";
		else
			$message = "Delete Failed";
		echo "<script type='text/javascript'>alert('$message'); window.location.href='../city.php';</script>";


			
?>

	<?php $conn-> close(); ?>
