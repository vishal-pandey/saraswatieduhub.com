<form method="post" action="./secure/login.php">
	<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="email" type="email" class="form-control" name="lemail" placeholder="Email" required="true" value="<?php echo $_COOKIE['email']; echo $_SESSION['lemail']; $_SESSION['lemail']=""; ?>">
	</div>
	<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="lpassword" placeholder="Password" required="true" value="<?php echo $_COOKIE['password']; echo $_SESSION['lpassword']; $_SESSION['lpassword']=""; ?>">
	</div>
	<br>
	<center>
	<button type="submit" class="btn btn-default col-sm-offset-">Submit</button>
	</center>
	<span style="color: red"><?php echo $_SESSION['log']; $_SESSION['log']=""; ?></span>
</form>