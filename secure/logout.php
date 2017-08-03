<?php
	session_start();
	unset($_COOKIE['loginemail']);
	unset($_COOKIE['loginpassword']);
	$_SESSION['lemail']="";
	$_SESSION['lpassword']="";
	setcookie('loginemail' , "" , -1 ,'/');
	setcookie('loginpassword' , "" , -1 ,'/');
	echo $_COOKIE['loginemail'];
?>
<script type="text/javascript">
	window.location.href = '../student-zone.php';
</script>