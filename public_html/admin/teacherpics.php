<!DOCTYPE html>
<html>
<head>
	<title>Saraswati Class</title>
	<?php include './content/head.html'; ?>
</head>
<body>
	<div class="main-wrapper">
		<?php include './content/header.html'; ?>
		
		<?php include './content/navigation.html';?>

		<section class="col-sm-12 main-section">
			<section class="col-sm-8 subsection">
				<div class="col-sm-12 yle">
					<h2>Teacher's pics upload</h2>

					<?php
						function stripoo($string) {
				    	$string = preg_replace("/[\s_\.]/", "-", $string);
				    	return $string;
						}
						include '../secure/configuration.txt';
						$conn = new mysqli($server , $user , $pwd , $db);
						$sql = "SELECT name FROM teacher";
						$result = $conn->query($sql);
						while ($row = $result->fetch_assoc()) 
						{
							$name = stripoo($row['name']);
							echo   '<div class="col-sm-12 well">'.
										'<center><h4>'.$row['name'].'</h4></center>'.
										'<center><img src="../pics/teachers/'.$name.'.jpg" width="200" height="200"></center><br>'.
										'<center>'.
											'<form method="post" enctype="multipart/form-data" action="./content/teacherupload.php?tname='.$name.'">'.
											    '<input type="file" name="imagee" id="fileToUpload" class="form-control"><br>'.
											    '<button type="submit" class="btn btn-default">Upload</button>'.
											'</form>'.
										'</center>'.
									'</div>';
						}
					?>
				</div>
								
			</section>

			<?php include './content/aside.html'; ?>
		</section>
		
		<section class="col-sm-12"><br></section>

		<?php include '../content/footer.html' ?>
	</div>
</body>
</html>