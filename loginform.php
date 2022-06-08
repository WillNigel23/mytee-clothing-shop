<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$xml = new DOMDocument();
$xml->load("database/accounts.xml");

$accounts = $xml->getElementsByTagName("account");

$flag = 0;
foreach($accounts as $account) {
	$username_db = $account->getElementsByTagName("username")->item(0)->nodeValue;
	$password_db = $account->getElementsByTagName("password")->item(0)->nodeValue;
    $user_id = $account->getElementsByTagName("user_id")->item(0)->nodeValue;
	if($username === $username_db) {
		$flag = 1;
		if($password === $password_db) {
            echo "login";
			$_SESSION["username"] = $username;
            $_SESSION["user_id"] = $user_id;
        } else {
		 echo "password_not_found";
        }
		break;
	}
}
echo $flag===0 ? "username_not_found" : "";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="styles/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	
	
</head>
<body>
	<div class="container-fluid">
		<div class="row ">
			<!-- IMAGE CONTAINER BEGIN -->
			<div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>
			<!-- IMAGE CONTAINER END -->

			<!-- FORM CONTAINER BEGIN -->
			<div class="col-lg-6 col-md-6 infinity-form-container">				
				<div class="col-lg-9 col-md-12 col-sm-9 col-xs-12 infinity-form">
					<!-- Company Logo -->
					<div class="text-center mb-3 mt-5">
						<img src="img/finaltee.png" width="150px">
					</div>
					<div c
					lass="text-center mb-4">
			      <h4>Login in to your account</h4>
			       
			   
			    </div>
			    <!-- Form -->
					<form class="px-3">
						 <form action="login.php" method="post">
						<!-- Input Box -->
						<div class="form-input">
							<span><i class="fa fa-envelope-o"></i></span>
							<input name="username" type="text" id="text" placeholder="Username" tabindex="10"required>
						</div>	
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="password" id="password" placeholder="Password" required>
						</div>
						<div class="row mb-3">
						<!-- Remember Checkbox -->
			        <div class="col-auto d-flex align-items-center">
			          <div class="custom-control custom-checkbox">
			            <input type="checkbox" class="custom-control-input" id="cb1">
			           	<label class="custom-control-label text-black" for="cb1">Remember me</label>
			          </div>
			        </div>
			 	    </div>
			 	    <!-- Login Button -->
			      <div class="mb-3"> 
							<button type="submit" name="submit" class="btn btn-block" class="text-white">Login</button>
							<!--<form method="POST" action="login.php">-->
					</div> 
						<div class="text-center mb-2 text-black">
			        <a href="reset.html" class="forget-link">Forgot password?</a>
			      </div>
						<div class="text-center mb-2">
		                    	
						</div>
						<div class="text-center mb-5 text-black">Don't have an account? 
							<a class="register-link" href="register.php">Register here</a>
			     	</div>
			     	<div class="g-recaptcha" data-sitekey="6Le4DccfAAAAAOAd7J8E4XmI7vWB0qG32YxxkHGs"></div>
				
					</div>

					</form>
					<style>
					.g-recaptcha{
                    position: absolute;
                    top: 85%;
                    left: 25%;
                    }
</style>
				</div>					
			</div>
			<!-- FORM CONTAINER END -->
		</div>
	</div>	
	
</body>
</html>
