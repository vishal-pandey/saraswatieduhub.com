<?php
	session_start();
	include 'configuration.txt';
	$conn = new mysqli($server , $user , $pwd , $db);
	$name = $_POST['name'];
	$class = $_POST['class'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$name = trim($name);
	$class = trim($class);
	$mobile = trim($mobile);
	$email = trim($email);
	$password = trim($password);

	$name = stripslashes($name);
	$class = stripslashes($class);
	$mobile = stripslashes($mobile);
	$email = stripslashes($email);
	$password = stripslashes($password);

	$name = htmlspecialchars($name);
	$class = htmlspecialchars($class);
	$mobile = htmlspecialchars($mobile);
	$email = htmlspecialchars($email);
	$password = htmlspecialchars($password);

		$_SESSION['name'] = $name;
		$_SESSION['class'] = $class;
		$_SESSION['mobile'] = $mobile;
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;

	if(!preg_match("/^[a-zA-Z ]*$/",$name))
	{
		$_SESSION['nameerror'] = "Please Enter A Valid Name";
	}
	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){

		$_SESSION['emailerror'] = "Please Enter A Valid Email Address";
	}
	else{

		$sql = "INSERT INTO student values ('{$name}','{$class}','{$mobile}','{$email}','{$password}')";

		

		if($conn->query($sql))
		{
			setcookie('name' , $name , time()+(86400*30),"/");
			setcookie('class' , $class , time()+(86400*30),"/");
			setcookie('mobile' , $mobile , time()+(86400*30),"/");
			setcookie('email' , $email , time()+(86400*30),"/");
			setcookie('password' , $password , time()+(86400*30),"/");
			session_unset();
			$_SESSION['successmodal'] = "modal('show')";
		}
		else{
			
			$_SESSION['signuperror'] = "This email address is already registered...";
			$_SESSION['e'] = "id='inputError' autofocus='true'";
			$_SESSION['diverror'] = "has-error has-feedback";
		}
	}
?>
<script type="text/javascript">
	window.location.href = '../student-zone.php';
</script>