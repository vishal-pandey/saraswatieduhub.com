<?php
	include '../../secure/configuration.txt';

	$conn = new mysqli($server , $user , $pwd , $db);

	if ($conn->connect_error) {
		echo "wow";
	}
	$sql = "DELETE FROM notice";
	$conn->query($sql);
	// echo $_POST["countt"][0];
	// echo "vishal pandey";

	$i=0;
	while (isset($_POST['countt'][$i])) {
		$sql = "INSERT INTO notice (cont) VALUES ('".$_POST['countt'][$i]."')";
		$result = $conn->query($sql);
		$i++;	
	}
?>
<script type="text/javascript">
	window.location.href = '../notice.php';
</script>