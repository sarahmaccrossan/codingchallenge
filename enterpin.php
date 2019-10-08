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

	<div class="container-fluid pt-3">
	
		<h3>Please enter your 4-digit pin below</h3>
	
		<div class="card" id ="cardpin">
			<div class="card-body">
			
				<form action="" method="POST" id="pin">
					<div class="row">
							<div class="form-group col-3">
								<input type="password" pattern="[0-9]*" class="form-control" name="pin1" maxlength = "1">
							 </div>

							<div class="form-group col-3">
								<input type="password" pattern="[0-9]*" class="form-control" name="pin2" maxlength = "1">
							 </div>
							
							<div class="form-group col-3">
								<input type="password" pattern="[0-9]*" class="form-control" name="pin3" maxlength = "1">
							 </div>
							 
							 <div class="form-group col-3">
								<input type="password" pattern="[0-9]*" class="form-control" name="pin4" maxlength = "1">
							 </div>
						<div class="col">
						</div>
					</div>
					<div class="row pb-3">
					<div class="col-2">
					</div>
							  <button type="submit" class="btn btn-warning btn-lg btn-block col-8"  name="submitpin">Submit</button>
							  <div class="col">
						</div>
						</div>
				</form>
				
				<?php
					  if (isset($_POST["submitpin"])) {
						  
						  $p1=$_POST["pin1"];
						  $p2=$_POST["pin2"];
						  $p3=$_POST["pin3"];
						  $p4=$_POST["pin4"];
							
						

							//Initiate cURL.
							$ch = curl_init('https://frontend-challenge.screencloud-michael.now.sh/api/pin/');

							//The JSON data.
							 $pin  = $p1 . $p2 . $p3 . $p4;
							 
							 
							 $pinArray = array (
									"pin"  => $pin
									) ;

							//Encode the array into JSON.
							$jsonDataEncoded = json_encode($pinArray);

							//Tell cURL that you want to send a POST request.
							curl_setopt($ch, CURLOPT_POST, 1);

							//Attach encoded JSON string to the POST fields.
							curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

							//Set the content type to application/json
							curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

							//Execute request
							$result = curl_exec($ch);
							
							//Attempt to stop withdraw box from popping up if the api result returned error
							//if (strpos($result, 'error') !== false) {
								//echo "Error! Please Try again.";
							//} else {
							
							echo "<p></p><p>How much would you like to withdraw?</p>
									<div class='row'>
										<div class='form-group col-4'>
											<input type='number' class='form-control' id='amount' value='100' maxlength = '4'>
										 </div>
									 </div>
									 <div class='row pb-3'>
									  <button type='button' class='btn btn-warning btn-lg btn-block' onclick='withdrawal()'>Submit</button>
									  <div class='col'>
										</div>
									</div>
									";
							//}
					  }
				?>
				
				<p id="balance"</p>
				
				<script src="withdrawal.js"></script>
			
			</div>
		</div>

	</div>
	
	<div class="fixed-bottom">
	<?php
	include ("navbarbottom.html")
	?>
	</div>
    
	<?php
	include ("jsplugins.html")
	?>
  </body>
</html>