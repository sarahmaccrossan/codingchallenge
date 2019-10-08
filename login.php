<!DOCTYPE html>
<html>
  <head>
	<?php 
	include ("headinfo.html");
	?>
  </head>
  <body>
    <?php
    include ("navbar.html");
    ?>

	<div class="container-fluid ">

		<div class="card pt-3">
			<div class="card-body">
			
			<form>
				<div class="row">
		
				  <div class="form-group col-md-6">
					<label for="exampleInputEmail1">Email address</label>
					<input type="text" class="form-control" id="exampleInputEmail1" name ="email" aria-describedby="emailHelp" required>
				  </div>
				  <div class="col">
					</div>
				</div>
			  
			  <div class="row">
					
			  <div class="form-group col-md-6">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
			  </div>
			   <div class="col">
					</div>
				</div>
			  
				  <div class="row text-center pl-3 col-5">
				  <button type="submit" class="btn btn-warning btn-lg btn-block" onclick="location.href = 'enterpin.php';">Next</button>
				  <div class="col">
					</div>
				</form>
				</div>
				
			<!-- php to check username and password
			if (isset($_POST["login"])) {
						  
						  $username=$_POST["username"];
						  $userpw=$_POST["userpw"];
						  
						  $correctusername = "mmartinsc";
						  $correctpw = "Screencloud1";
						  
						  if (($username==$correctusername) && ($userpw==$correctpw)) {
							  header("Location:enterpin.php");
						  }
			}
			-->
			
			</div>
		</div>
		
		<div class="fixed-bottom">
	<?php
	include ("navbarbottom.html")
	?>
	</div>
		
	</div>
    
	<?php
	include ("jsplugins.html")
	?>
  </body>
</html>
