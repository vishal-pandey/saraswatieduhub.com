<form method="post" action="./secure/enrolnment-process.php">
	<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="name" type="text" class="form-control" name="ename" placeholder="Name" required="true">
	</div>
	<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
      <input id="class" type="text" class="form-control" name="eclass" placeholder="Class" required="true">
	</div>
	<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
      <input id="mobile" type="number" class="form-control" name="emobile" placeholder="Mobile No." required="true">
	</div>
	<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="email" type="email" class="form-control" name="eemail" placeholder="Email" required="true">
	</div>
	<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
      <textarea id="comment" class="form-control" name="ecomment" placeholder="Message"></textarea>
	</div>
	<br>
	<center>
	<button type="submit" class="btn btn-default col-sm-offset-">Submit</button>
	<span style="color: red"><?php echo $_SESSION['eemailerror']; $_SESSION['eemailerror'] = ""; ?></span>
	<span style="color: red"><?php echo $_SESSION['enameerror']; $_SESSION['enameerror'] = ""; ?></span>
	</center>
</form>