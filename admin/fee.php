<!DOCTYPE html>
<html>
<head>
	<title>Saraswati Class</title>
	<?php include './content/head.html'; ?>
			<script type="text/javascript">
				$(document).ready(function() {
			    var max_fields      = 10; //maximum input boxes allowed
			    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
			    var add_button      = $(".add_field_button"); //Add button ID
			    
			    var x = 1; //initlal text box count
			    $(add_button).click(function(e){ //on add input button click
			        e.preventDefault();
			        if(x < max_fields){ //max input box allowed
			            x++; //text box increment
			            $(wrapper).append('<div class="form-group well"><input type="text" name="tdate[]" class="form-control" required="true" placeholder="date">&nbsp;&nbsp;<input name="tfee[]" class="form-control" required="true" placeholder="Fees">&nbsp;&nbsp;<a href="#" class="remove_field">Remove</a></div>'); //add input box
			        }
			    });
			    
			    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
			        e.preventDefault(); $(this).parent('div').remove(); x--;
			    })
				});
			</script>
</head>
<body>
	<div class="main-wrapper">
		<?php include './content/header.html'; ?>
		
		<?php include './content/navigation.html';?>

		<section class="col-sm-12 main-section">
			<section class="col-sm-8 subsection">
				<div class="col-sm-12 yle">
					<?php
						include '../secure/configuration.txt';
						$conn = new mysqli($server , $user , $pwd , $db);
						$sql1 = "SELECT * FROM student where email = '".$_GET['email']."'";
						$result1 = $conn->query($sql1);
						$row1 = $result1->fetch_assoc();
						$emaill = $_GET['email'];

						
					?>

					<h2>Fee Details of <?php echo $row1['name']; ?></h2>
					<span><b>Instruction :- </b>Enter The Date in yyyy-mm-dd format</span><br><br>
					<form action="./content/feeprocess.php?email=<?php echo $emaill; ?>" method="post" class="form-inline">
						<div class="input_fields_wrap">
														
							<?php
								$sql = "SELECT * FROM fee where email ='".$emaill."'";
								$result = $conn->query($sql);
								while($row = $result->fetch_assoc())
								{
									
									echo '<div class="form-group well"><input type="text" name="tdate[]" class="form-control" required="true" placeholder="date" value="'.$row['tdate'].'">&nbsp;&nbsp;<input name="tfee[]" class="form-control" required="true" placeholder="Fees" value = "'.$row['tfee'].'">&nbsp;&nbsp;<a href="#" class="remove_field">Remove</a></div>';
								}			
							?>
						    <!-- <div><input type="text" name="mytext[]"></div> -->
						</div>
						<button class="add_field_button btn btn-default">Add More Fields</button>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					<br>					
				</div>								
			</section>

			<?php include './content/aside.html'; ?>
		</section>
		
		<section class="col-sm-12"><br></section>

		<?php include '../content/footer.html' ?>
	</div>
</body>
</html>