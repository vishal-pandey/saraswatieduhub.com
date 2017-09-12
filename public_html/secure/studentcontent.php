<div class="col-sm-12 yle">
	<center><h2><b><u>Student Zone</u></b></h2></center>
	<br>
	<div class="col-sm-12">
		<center><h4>Welcome <?php echo $_COOKIE['name']; ?></h4></center>
		<div class="panel-group" id="accordion">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse1"  style="display: block;">Result</a>
					</h4>					
				</div>
				<div class="panel-collapse collapse in overfloauto" id="collapse1">
					<div class="panel-body">
						<?php include './secure/result.php';?>						
					</div>					
				</div>

			</div>
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="display: block;">Study Material</a>
					</h4>					
				</div>
				<div class="panel-collapse collapse" id="collapse2">
					<div class="panel-body">
						<?php include './secure/study-material.php'; ?>
					</div>					
				</div>

			</div>
			<div class="panel panel-warning">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="display: block;">Audio And Video</a>
					</h4>					
				</div>
				<div class="panel-collapse collapse" id="collapse3">
					<div class="panel-body">
						<?php include './secure/video.php'; ?>
					</div>					
				</div>

			</div>
		</div>

	</div>
</div>