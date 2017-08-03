<?php 
	include './secure/configuration.txt';
	$conn = new mysqli($server , $user , $pwd , $db);
	$sql = "SELECT * FROM video";
	$result = $conn->query($sql);

	while ($row = $result->fetch_assoc()) {
		
		echo"<div class='col-sm-6 youtubevideo'>".
				$row['vlink'].
			"</div>";

	}
?>
