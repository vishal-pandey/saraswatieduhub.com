<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Enrolnment | Saraswati Edu Hub</title>
	<?php include './content/head.html'; ?>
	<script type='text/javascript'>$(window).on('load',function(){$('#myModal').<?php echo $_SESSION['successmodal']; $_SESSION['successmodal'] = "";?>;});</script>
</head>
<body>
	<div id="myModal" class="modal fade" role="dialog" style="display: none;">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Thank You</h4>
	      </div>
	      <div class="modal-body">
	        <p>Thank You <b><?php echo $_SESSION['enrolname']; ?></b> For Your Interest You Would Be Contacted Soon</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>
	<div class="main-wrapper">
		<?php include './content/header.html'; ?>
		
		<?php include './content/navigation.html';?>

		<section class="col-sm-12 main-section">
			<section class="col-sm-8 subsection">
					<div class="col-sm-12 yle">
						<center><h2>Enrolnment</h2></center>
						
						<div class="well enrolnment">
							<?php include'./content/enrolnmentform.php' ?>
						</div>
					</div>		
			</section>

			<?php include './content/aside.html'; ?>
		</section>
		
		<section class="col-sm-12"><br></section>

		<?php include './content/footer.html' ?>
	</div>
</body>
</html>