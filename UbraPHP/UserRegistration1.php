<!DOCTYpE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Registration Step 1</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		
		<style>
			h3{
				color:#64b5f6;
				font-weight: bold;
				text-transform: uppercase;
			}
			
			.material-icons{
				color: #03a9f4;
			}

			.btn1{
				background-color:#03a9f4; ;
			}
			
			.step{
				font-weight: bold;
			}
		</style>
</head>
<body>

	<div class="row">
		<div class="col l3 m5 s12"></div>
			<div class="col l6 m6 s12">
				<form action="complain.php" method="POST">
					<div class="card-panel z-depth-5">
						<h3 class="center reg">UBRA</h3>
						<p class="center">Register Now!</p>
						<p class="step center">Step 1 - Account</p>

						<div class="input-field col s12">
							<input type="email" name="email" class="validate">
							<label>Enter First Name</label>
						</div>
						
						<div class="input-field col s6">
							<input type="email" name="email" class="validate">
							<label>Enter Midle Name</label>
						</div>

						<div class="input-field col s6">
							<input type="email" name="email" class="validate">
							<label>Enter Last Name</label>
						</div>
								
						<div class="input-field col s6">
							<input type="email" name="email" class="validate">
							<label>Enter Username</label>
						</div>
							
						<div class="input-field col s6">
							<input type="email" name="email" class="validate">
							<label>Enter email</label>
						</div>
								  
						<div class="input-field col s12">
							<input type="password" name="pass1">
							<label>Enter password</label>
						</div>

						<div class="input-field col s12">
							<input type="password" name="pass1">
							<label>Confirm password</label>
						</div>
							
							<a href="UserRegistration2.php" class="waves-effect waves-light btn btn1">NEXT</a>
							
							<div class="clearfix"></div>
					</div>
				</form>
			</div>
		</div>
</div>
<!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  

  </body>
</html>