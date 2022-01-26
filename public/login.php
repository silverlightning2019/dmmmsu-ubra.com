<!DOCTYpE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Log In Page</title>

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

			.employer{
				font-weight: bold;
				text-transform: uppercase;
			}

			.pick{
				width: 50%!important;
				margin: 0 auto;
			}

			.modal-trigger{
				float: right;
				padding-bottom: 10px;
				margin-bottom:10px ;
			}

			.modal{
				height: 400px !important;
				width: 300px !important;
			}

			.create{
				color: black;
			}

			.card-panel{
				margin-top: 35px;
			}

			.click{
				font-weight: bold;
			}
		</style>
</head>
<body>

 <div class="container">
	<div class="row">
		<div class="col l3 m5 s12"></div>
			<div class="col l6 m6 s12">
				<form action="" method="">
					<div class="card-panel z-depth-5">
						<a href="GuestDashboard.php" class="btn-floating btn waves-effect waves-light blue"><i class="material-icons">arrow_back</i></a>
						<h3 class="center reg">UBRA</h3>
						<p class="center">Log In Now!</p>
							
						<div class="input-field col s12">
							<i class="material-icons prefix">email</i>
							<input type="email" name="email" class="validate" placeholder="Enter Username/Email Address">
						</div>
								  
						<div class="input-field col s12">
							<i class="material-icons prefix">lock</i>
							<input type="password" name="pass1" placeholder="Enter Password">
						</div>
						
						<p class="right-align">Create Account?<a href="UserRegistration1.php" class="blue-text click">Register Here!</a></p>
						<input type="submit" name="submit" value="Log In" class="blue white-text btn left col s12">
						<div class="clearfix"></div>
					</div>
				</form>
			</div>
		</div>
     </div>
</div>
     

<!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  

  </body>
</html>
