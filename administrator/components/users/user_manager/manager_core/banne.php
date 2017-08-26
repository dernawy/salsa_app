<?php
include '../../../../classes/class.user_manager.php';

	$id = $_GET['id'];

	if (mysqli_connect_errno()){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$result = mysqli_query($mysqli,"SELECT user_banned FROM users WHERE id = $id");
	while($row = mysqli_fetch_array($result)){
		$banned = $row['user_banned'];

		if($banned == 1){

			echo "<div>";
			echo "<div><p>This user already banned</p></div>";
			echo "</div>";
		}
		else
		{
			$banned = "1";
			print_r($banned);
			$result = mysqli_query($mysqli, "UPDATE users SET user_banned='$banned' WHERE id=$id");
			mysqli_close($mysqli);
			header("Location:banne_ok.php");
		}
	}
?>