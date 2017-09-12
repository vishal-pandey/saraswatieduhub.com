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
				<h1>Fee List Table</h1>
				<form class="well" method="post">
					<div class="input-group">
						<h4>Select Month and year to show fee details.</h4>
				      <select name="month" required="true">
				      	<option value="0" selected="1">Month</option><option value="01">Jan</option><option value="02">Feb</option><option value="03">Mar</option><option value="04">Apr</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">Aug</option><option value="09">Sept</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
				      </select>
				      <select name="year" required="true">
				      	<option value="0" selected="1">Year</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option>
				      </select>
				      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				      <button type="submit" class="btn btn-default">Submit</button>
					</div>					
				</form>
				<div class="well col-sm-12">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Mobile</th>
								<th>Date</th>
								<th>Fees</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$server = "localhost";
								$user = "root";
								$pwd = "12345";
								$db = "saraswati";

								$month = $_POST['month'];
								$year = $_POST['year'];

								$conn = new mysqli($server , $user , $pwd, $db);
								$sql = "SELECT * FROM fee where extract(month from tdate) = '{$month}' and extract(year from tdate) = '{$year}';";
								$result = $conn->query($sql);

								while ($row = $result->fetch_assoc()) {

									$email = $row['email'];
									$sql1 = "select * from student where email = '{$email}'";

									$result1 = $conn->query($sql1);
									$row1 = $result1->fetch_assoc();


									echo "<tr>";
										echo "<td>{$row1['name']}</td>";
										echo "<td>{$row1['mobile']}</td>";
										echo "<td>{$row['tdate']}</td>";
										echo "<td>{$row['tfee']}</td>";
									echo "</tr>";
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
<style type="text/css">
	select{
		height: 30px;
	}
</style>