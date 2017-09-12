<!DOCTYPE html>
<html>
<head>
	<title>Saraswati Class</title>
	<?php include './content/head.html'; ?>
			<script type="text/javascript">
				$(document).ready(function() {
			    var max_fields1      = 10; //maximum input boxes allowed
			    var wrapper1         = $(".input_fields_wrap1"); //Fields wrapper
			    var add_button1      = $(".add_field_button1"); //Add button ID
			    
			    var x = 1; //initlal text box count
			    $(add_button1).click(function(e1){ //on add input button click
			        e1.preventDefault();
			        if(x < max_fields1){ //max input box allowed
			            x++; //text box increment
			            $(wrapper1).append(
			            '<div class="well">'+
			            '<div class="form-group">'+
			            	'<input id="class" type="text" class="form-control" name="class[]" placeholder="class">'+
			            	'<input id="subject" type="text" class="form-control" name="subject[]" placeholder="subject">'+
			            	'<input id="marks" type="text" class="form-control" name="testdate[]" placeholder="testdate">'+
			            '</div>'+
			            '<br><br>'+
			            '<div class="input_fields_wrap">'+
				            '<div class="form-group">'+
				            	'<input id="name" type="text" class="form-control" name="name[]" placeholder="name">'+
				            	'<input id="marks" type="text" class="form-control" name="marks[]" placeholder="marks">'+
				            	'<a href="#" class="remove_field">Remove</a>'+
				            '</div>'+
				            '<br>'+
				            '<button class="add_field_button btn btn-default">Add More Fields</button>'+
			            '</div>'+
				            	'<br><br>'+
				            	'<a href="#" class="remove_field1">Remove</a>'+
			        	'</div>'); //add input box
			        }
			    });
			    
			    $(wrapper1).on("click",".remove_field1", function(e1){ //user click on remove text
			        e1.preventDefault(); $(this).parent('div').remove(); x--;
			    })
				});
			

				$(document).ready(function() {
			    var max_fields      = 10; //maximum input boxes allowed
			    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
			    var add_button      = $(".add_field_button"); //Add button ID
			    
			    var x = 1; //initlal text box count
			    $(add_button).click(function(e){ //on add input button click
			        e.preventDefault();
			        if(x < max_fields){ //max input box allowed
			            x++; //text box increment
			            $(wrapper).append('<div class="form-group"><input id="name" type="text" class="form-control" name="name[]" placeholder="name"><input id="marks" type="text" class="form-control" name="marks[]" placeholder="marks"><a href="#" class="remove_field">Remove</a></div>'); //add input box
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
					<h2>Results</h2>
					<form action="./content/resultprocess.php" method="post" class="form-inline">
						<div class="input_fields_wrap1">
							
							<?php
								include '../secure/configuration.txt';
								$conn = new mysqli($server , $user , $pwd , $db);
								$sql = "SELECT class , subject , testdate FROM result group by class , subject , testdate";
								$result = $conn->query($sql);
								while($row = $result->fetch_assoc())
								{
									
									echo '<div class="well"><div class="form-group"><input id="class" type="text" class="form-control" name="class[]" placeholder="class" value="'.$row['class'].'"><input id="subject" type="text" class="form-control" name="subject[]" placeholder="subject" value="'.$row['subject'].'"><input id="marks" type="text" class="form-control" name="testdate[]" placeholder="testdate" value="'.$row['testdate'].'"></div><br><br>'.

										'<div class="form-group"><input id="name" type="text" class="form-control" name="name[]" placeholder="name"><input id="marks" type="text" class="form-control" name="marks[]" placeholder="marks"><a href="#" class="remove_field">Remove</a></div>'.
										'<button class="add_field_button btn btn-default">Add More Fields</button>'.




										'<a href="#" class="remove_field1">Remove</a>'.
										'</div>';
								}			
							?>
						    <!-- <div><input type="text" name="mytext[]"></div> -->
						</div>
						<button class="add_field_button1 btn btn-default">Add More Fields</button>
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