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
				<div class="col-sm-12 yle overfloauto">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Class</th>
								<th>Mobile</th>
								<th>Email</th>
								<th>Message</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								include '../secure/configuration.txt';
								$conn = new mysqli($server , $user , $pwd , $db);
								$sql = "SELECT * FROM enrolnment";
								$result = $conn->query($sql);
								while ($row = $result->fetch_assoc()) 
								{
									echo"<tr>".
											"<td>".$row['name']."</td>".
											"<td>".$row['class']."</td>".
											"<td>".$row['mobile']."</td>".
											"<td>".$row['email']."</td>".
											"<td>".$row['message']."</td>".
										"</tr>";	
								}
							?>							
						</tbody>
					</table>
				</div>
			</section>
			<?php include './content/aside.html'; ?>
		</section>
		<section class="col-sm-12"><br></section>
		<?php include '../content/footer.html' ?>
	</div>
</body>
</html>