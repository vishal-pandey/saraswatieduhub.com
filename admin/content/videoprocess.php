<?php
	include '../../secure/configuration.txt';

	$conn = new mysqli($server , $user , $pwd , $db);

	$sql = "DELETE FROM video";
	$conn->query($sql);
	// echo $_POST["countt"][0];
	// echo "vishal pandey";

	$i=0;
	while (isset($_POST['countt'][$i])) {
		$sql = "INSERT INTO video VALUES ('".$_POST['countt'][$i]."')";
		$result = $conn->query($sql);
		$i++;	
	}
?>
<script type="text/javascript">
	window.location.href = '../video.php';
</script>