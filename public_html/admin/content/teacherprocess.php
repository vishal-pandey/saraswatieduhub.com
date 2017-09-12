<?php
	include '../../secure/configuration.txt';

	$conn = new mysqli($server , $user , $pwd , $db);

	$sql = "DELETE FROM teacher";
	$conn->query($sql);
	// echo $_POST["countt"][0];
	// echo "vishal pandey";

	$i=0;
	while (isset($_POST['name'][$i])) {
		$sql = "INSERT INTO teacher VALUES ('".$_POST['name'][$i]."' , '".$_POST['sbio'][$i]."' , '".$_POST['bio'][$i]."')";
		$result = $conn->query($sql);
		$i++;	
	}
?>
<script type="text/javascript">
	window.location.href = '../expert.php';
</script>