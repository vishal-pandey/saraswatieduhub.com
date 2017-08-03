<?php
	session_start();
	include './configuration.txt';
	$conn = new mysqli($server , $user , $pwd , $db);
	$email = $_POST['lemail'];
	$password = $_POST['lpassword'];

	$_SESSION['lemail'] = $email;
	$_SESSION['lpassword'] = $password;

	$sql = "SELECT * FROM student WHERE email = '{$email}' AND password = '{$password}'";
	$result = $conn->query($sql);

	if ($result->num_rows >0) 
	{
		$row = $result->fetch_assoc();
		setcookie('name' , $row['name'] , time()+(86400*30),"/");
		setcookie('class' , $row['class'] , time()+(86400*30),"/");
		setcookie('mobile' , $row['mobile'] , time()+(86400*30),"/");
		setcookie('email' , $row['email'] , time()+(86400*30),"/");
		setcookie('password' , $row['password'] , time()+(86400*30),"/");
		setcookie('loginemail' , $row['email'] , time()+(86400*30),"/");
		setcookie('loginpassword' , $row['password'] , time()+(86400*30),"/");
	}
	else
	{
		$_SESSION['log'] = "Wrong Email And Password Combination";
		if (isset($_COOKIE['email'])) {
			// session_unset();
			$_SESSION['lemail']="";
			$_SESSION['lpassword']="";
			$_SESSION['email']="";
			$_SESSION['password']="";
			$_SESSION['mobile']="";
			$_SESSION['name']="";
			$_SESSION['class']="";
		}

		$_SESSION['e']="";
		$_SESSION['signuperror']="";
		$_SESSION['diverror']="";
		unset($_SESSION['e']);
		unset($_SESSION['signuperror']);
		unset($_SESSION['diverror']);
	}
?>

<script type="text/javascript">
	window.location.href = '../student-zone.php';
</script>