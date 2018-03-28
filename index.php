<?php
if (isset($_POST['kyc-submit'])) {
	echo "# code...";
	print_r($_POST);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pixiubit | KYC</title>
    <style type="text/css">
    	.kyc-form{
    		margin: 0 auto;
    		overflow: hidden;
    		padding: 10px 0;
    		align-items: center;
    		justify-content: space-around;
    		float: none;
    	}
    	.form-group>label{
    font-weight: bold;
    font-family:  sans-serif;
    	}
    </style>
  </head>
  <body>
  	<div class="container">
  		<div class="col-md-6 kyc-form">
  			<form method="post" enctype="multipart/form-data">
  				<div class="form-group">
  					<label for="fullname">Full Name</label>
  					<input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
  				</div>

				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control" name="street-line-1" placeholder="Street Line 1" required>
					<br>
					<input type="text" class="form-control" name="street-line-2" placeholder="Street Line 2">
					<br>
					<input type="text" class="form-control" name="city" placeholder="City" required>
					<br>
					<input type="text" class="form-control" name="state" placeholder="State/Province" required>
					<br>
					<input type="text" class="form-control" name="country" placeholder="Country" required>
				</div>

				<div class="form-group">
					<label for="passport-image">Passport Image</label>
					<input type="file" name="passport" class="form-control-file" required>
				</div>
  
				<div class="form-group">
					<input type="submit" class="form-control btn btn-primary" name="kyc-submit" value="Submit">
				</div>
			</form>
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>