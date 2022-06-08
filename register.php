<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="styles/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row ">
			<!-- IMAGE CONTAINER BEGIN -->
			<div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>
			<!-- IMAGE CONTAINER END -->

			<!-- FORM CONTAINER BEGIN -->
			<div class="col-lg-6 col-md-6 infinity-form-container">					
				<div class="col-lg-9 col-md-12 col-sm-8 col-xs-12 infinity-form">
					<!-- Company Logo -->
					<div class="text-center mb-3 mt-5">
						<img src="img/finaltee.png" width="150px">
					</div>
					<div class="text-center mb-4">
				    <h4>Create an account</h4>
				  </div>
					<!-- Form -->
					<form class="px-3">
						<form action="login.php" method="post">
						<!-- Input Box -->
						<div class="form-input">
							<span><i class="fa fa-user-o"></i></span>
							<input type="text" name="" placeholder="Full Name" tabindex="10" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-envelope-o"></i></span>
							<input type="email" name="" placeholder="Email Address" tabindex="10"required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="" placeholder="Password" required>
						</div>
						<!-- Register Button -->
				    <div class="mb-3"> 
							<button type="submit" class="btn btn-block">Register</button>
						</div>
						<div class="text-center mb-2">
		         	<div class="text-center mb-2 text-black">or register with</div>
						</div>
						<div class="text-center mb-5 text-black">Already have an account?
							<a class="login-link" href="loginform.php">Login here</a>
		       	</div>
					</form>
				</div>
			</div>
			<!-- FORM CONTAINER END -->
		</div>
	</div>	
</body>
</html>