<?php
	session_start();
	$name = $_POST['ename'];
	$class = $_POST['eclass'];
	$mobile = $_POST['emobile'];
	$email = $_POST['eemail'];
	$comment = $_POST['ecomment'];

	$name = trim($name);
	$class = trim($class);
	$mobile = trim($mobile);
	$email = trim($email);
	$comment = trim($comment);

	$name = stripslashes($name);
	$class = stripslashes($class);
	$mobile = stripslashes($mobile);
	$email = stripslashes($email);
	$comment = stripslashes($comment);

	$name = htmlspecialchars($name);
	$class = htmlspecialchars($class);
	$mobile = htmlspecialchars($mobile);
	$email = htmlspecialchars($email);
	$comment = htmlspecialchars($comment);

	if(!preg_match("/^[a-zA-Z ]*$/",$name))
	{
		$_SESSION['enameerror'] = "Please Enter A Valid Name";
	}
	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){

		$_SESSION['eemailerror'] = "Please Enter A Valid Email Address";
	}
	else{
		include './configuration.txt';
		$conn = new mysqli($server , $user , $pwd , $db);
		$sql = "INSERT INTO enrolnment values('{$name}', '{$class}', '{$mobile}', '{$email}', '{$comment}')";
		$conn->query($sql);
		$_SESSION['successmodal'] = "modal('show')";
		$_SESSION['enrolname'] = $name;
	}
?>
<script type="text/javascript">
	window.location.href = '../enrolnment.php';
</script>