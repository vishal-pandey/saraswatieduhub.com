<?php
	include '../../secure/configuration.txt';

	$conn = new mysqli($server , $user , $pwd , $db);
	$emaill = $_GET['email'];

	echo $emaill;

	$sql = "DELETE FROM fee where email = '".$emaill."'";
	$conn->query($sql);

	$i=0;
	while (isset($_POST['tfee'][$i])) {
		$sql = "INSERT INTO fee VALUES ('{$emaill}' , '".$_POST['tdate'][$i]."' , '".$_POST['tfee'][$i]."')";
		$result = $conn->query($sql);
		$i++;	
	}

	echo '<script type="text/javascript">	window.location.href = "../fee.php?email='.$emaill.'"; </script>';
?>
