<?php 
	include './secure/configuration.txt';
	$conn = new mysqli($server , $user , $pwd , $db);
	$sql = "SELECT class , subject , testdate FROM result group by class , subject , testdate";
	$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
	echo
'<div>'.
'<center><h4> class ('.$row['class'].') subject ('.$row['subject'].') Date('.$row['testdate'].')'.'</h4></center>'.
'<table class="table table-striped">'.
	'<thead>'.
		'<tr>'.
			'<th>Name</th>'.
			'<th>Marks</th>'.
		'</tr>'.
	'</thead>'.
	'<tbody>';
			$sql1 = "SELECT name , marks FROM result where subject = '".$row['subject']."' AND class = '".$row['class']."' AND testdate = '".$row['testdate']."'";
			$result1 = $conn->query($sql1);			
			while ($row1 = $result1->fetch_assoc()) {
				echo "<tr>".
						"<td>".$row1['name']."</td>".
						"<td>".$row1['marks']."</td>".
					"</tr>";
			}
		echo
	'</tbody>'.
'</table>'.
'</div>';
}
?>