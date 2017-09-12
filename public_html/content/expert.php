<?php
	function stripoo($string) {
    	$string = preg_replace("/[\s_\.]/", "-", $string);
    	return $string;
	}

	include './secure/configuration.txt';
	$conn = new mysqli($server , $user , $pwd , $db);
	$sql = "SELECT * FROM teacher";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {

		$name = stripoo($row['name']);

		echo"<div class='col-sm-4 well experts'>".
				"<center>".
					"<img src='./pics/teachers/".$name.".jpg' alt='teacher' class='img-circle experts' width='100' height='100'>".
					"<h4>".$row['name']."</h4>".
					"<p class='sbio'>".$row['sbio'].
						// "<br>".
						"</p>".
						"<button type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#".$name."'>See More</button>".
						"<div id='".$name."' class='modal fade' role='dialog'>".
							"<div class='modal-dialog'>".

							    "<div class='modal-content'>".
							     "<div class='modal-header'>".
							        "<button type='button' class='close' data-dismiss='modal'>&times;</button>".
							        "<h4 class='modal-title'>".$row['name']."</h4>".
							      "</div>".
							      "<div class='modal-body'>".
							        "<p>".$row['bio']."</p>".
							      "</div>".
							      "<div class='modal-footer'>".
							        "<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>".
							      "</div>".
							    "</div>".
							"</div>".
						"</div>".
					// "</p>".
				"</center>".
			"</div>";
	}
?>