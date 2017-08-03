<div class="file_cabinet col-12" id="file_cabinet">
	<?php
        $dir = scandir('./upload/','0');
        for ($i=0; $i <50 ; $i++) {             
            if (! is_dir($dir[$i]) & !is_null($dir[$i])) {
            echo "~>&nbsp;&nbsp;&nbsp;<a href='./upload/".$dir[$i]."' target='_blank'>".$dir[$i]."</a><br>";
            echo "<br>";
            }
        }        
        echo "<br><br><br>";        
	?>    
</div>
<div id="upload" class="upload">
	<?php 
		$target_dir = "./upload/";
        $target_file = $target_dir . basename($_FILES["fileto"]["name"]);
        if ($_POST['pass'] == "sarswati") 
        {
        	move_uploaded_file($_FILES["fileto"]["tmp_name"], $target_file);
        }
        elseif ($_POST['pass'] != "") 
        {
            $message = "Wrong Password";
        }
 	?>
	<form class="form-inline" action=<?php echo $_SERVER['PHP_SELF']; ?> method="post" enctype="multipart/form-data">
			<div class="form-group">
					
	            <label>Enter Password:</label>
	            <input type="test" name="pass" id="pass" class="form-control"></input>
			</div>
			<div class="form-group">
				
            <input type="file" name="fileto" id="fileto" value="select" class="form-control"></input>
			</div>

            <button type="submit" class="btn btn-info">Upload</button><?php  echo "&nbsp;&nbsp;&nbsp;".$message; ?>
	</form>
</div>