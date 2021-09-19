<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Log in form</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
	</head>
	<body>
		
		<!-- LOG IN SECTION START-->
		<!--================-->
		<section class="logIn">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<div class="user-account">
							<h2>Login with your account</h2>
							<!--FORM START-->
							<form action="action.php" method="post">
								<div class="inputName">
									<input type="email" name="email" class="input-type" value="" placeholder="Email address">
								</div>
								<div class="inputName">
									<input type="password" name="password" class="input-type" value="" placeholder="Password">
								</div>
								<div class="input-btn">
									<button name="submit" id="loginBtn" value=""> Login </button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- //LOG IN SECTION END-->
		<!--================-->
	</body>
</html>