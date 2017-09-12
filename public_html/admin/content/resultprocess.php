<?php
	include '../../secure/configuration.txt';

	$conn = new mysqli($server , $user , $pwd , $db);

	$sql = "DELETE FROM result";
	$conn->query($sql);
	// echo $_POST["countt"][0];
	// echo "vishal pandey";

	$i=0;
	while (isset($_POST['name'][$i])) {
		$sql = "INSERT INTO result VALUES ('".$_POST['name'][$i]."' , '".$_POST['class'][$i]."' , '".$_POST['subject'][$i]."' , '".$_POST['marks'][$i]."' , '".$_POST['testdate'][$i]."')";
		$result = $conn->query($sql);
		$i++;	
	}
?>
<script type="text/javascript">
	window.location.href = '../result.php';
</script>