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
						<a href="./"><h3 class="center reg">UBRA</h3></a>
						<p class="center">Log In Now!</p>
							
						<div class="input-field col s12">
							<i class="material-icons prefix">email</i>
							<input type="email" name="email" id="email" class="validate" placeholder="Enter Username/Email Address">
						</div>
								  
						<div class="input-field col s12">
							<i class="material-icons prefix">lock</i>
							<input type="password" name="psword" id="psword" placeholder="Enter Password">
						</div>
						
						<p class="right-align">Create Account?<a href="userregistration1.php" class="blue-text click"> Register Here!</a></p>
						<a id="login" name="login" class="blue white-text waves-effect btn left col s12">Log In</a>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/script.js"></script>
  

  </body>
</html>
