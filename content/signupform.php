<form method="post" action="./secure/signup.php">
	<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="name" type="text" class="form-control" name="name" placeholder="Name" required="true" value="<?php echo $_SESSION['name']; ?>" >
	</div>
	<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
      <input id="class" type="text" class="form-control" name="class" placeholder="Class" required="true" value="<?php echo $_SESSION['class']; ?>">
	</div>
	<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
      <input id="mobile" type="number" class="form-control" name="mobile" placeholder="Mobile No." required="true" value="<?php echo $_SESSION['mobile']; ?>">
	</div>
	<div class="input-group <?php echo $_SESSION['diverror']; ?>">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="email" type="email" class="form-control" name="email" placeholder="Email" required="true" <?php echo $_SESSION['e']." value='".$_SESSION['email']."'"; $_SESSION['e']="";?> >
	</div>
	<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="true" value="<?php echo $_SESSION['password']; ?>">
	</div>
	<br>
	<center>
	<button type="submit" class="btn btn-default col-sm-offset-">Submit</button>
	</center>
	<span style="color: red"><?php echo $_SESSION['signuperror']; $_SESSION['signuperror'] = ""; ?></span>
	<span style="color: red"><?php echo $_SESSION['emailerror']; $_SESSION['emailerror'] = ""; ?></span>
	<span style="color: red"><?php echo $_SESSION['nameerror']; $_SESSION['nameerror'] = ""; ?></span>
</form> 