<?php

	function stripoo($string) {
    	$string = preg_replace("/[\s_]/", "-", $string);
    	return $string;
	}

	include './secure/configuration.txt';
	$conn = new mysqli($server , $user , $pwd , $db);
	$sql = "create table teacher( name varchar(60) primary key, sbio text, bio text)";
	if($conn->query($sql))
	{
		$conn->error;
	}
	else
	{
		echo "table created";
	}

	$sql = "insert into teacher values('Veer Abhimanyu', 'This is a short bio','this is long bio')";
	if($conn->query($sql))
	{
		echo "veer abhimanyu inserted";
	}
	else
	{
		$conn->error;
	}
	

	$sql = "insert into teacher values('Govind Mishra','here would go short bio','here would be the long bio')";
	if($conn->query($sql))
	{
		echo "govind mishra inserted";
	}
	else
	{
		$conn->error;
	}



	$sql = "insert into teacher values('Teacher Name','This is default bio','This is default long bio')";
	if($conn->query($sql))
	{
		echo "Default teacher  inserted";
	}
	else
	{
		$conn->error;
	}

	$sql = "CREATE TABLE student(name varchar(50), class varchar(50) , mobile varchar(20), email varchar(80) primary key, password varchar(20))";
	if($conn->query($sql))
	{
		echo "Default teacher  inserted";
	}
	else
	{
		$conn->error;
	}
	$sql = "CREATE TABLE result(name varchar(50) , class varchar(50) , subject varchar(50) , marks varchar(50))";
	if($conn->query($sql))
	{
		echo "result table created";
	}
	else
	{
		$conn->error;
	}

	$sql = "CREATE TABLE video(vlink text)";
	if($conn->query($sql))
	{
		echo "Video table created";
	}
	else
	{
		$conn->error;
	}


	$sql = "CREATE TABLE enrolnment(name varchar(50) , class varchar(50) , mobile varchar(20) , email varchar(60) , message text)";
	if($conn->query($sql))
	{
		echo "Enrolnment table created table created";
	}
	else
	{
		$conn->error;
	}

	$sql = "create table notice(sno int(3) primary key auto_increment, cont text);";
	if($conn->query($sql))
	{
		echo "notice table created";
	}
	else
	{
		$conn->error;
	}

	$sql = "alter table result add testdate text";
	if($conn->query($sql))
	{
		echo "testdate added to result table";
	}
	else
	{
		$conn->error;
	}	


	$sql = "create table fee(email varchar(80) , tdate date , tfee varchar(10))";
	if($conn->query($sql))
	{
		echo "Fee Table created";
	}
	else
	{
		$conn->error;
	}	

	
	
?>