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
				height: 225px !important;
				width: 500px !important;
			}

			.create{
				color: black;
			}
		</style>
</head>
<body>

 <div class="container">
	<div class="row">
		<div class="col l3 m5 s12"></div>
			<div class="col l6 m6 s12">
				<form action="complain.php" method="POST">
					<div class="card-panel z-depth-5">
						<h3 class="center reg">UBRA</h3>
						<p class="center">Log In Now!</p>
							
							<!--Select-->	
						  <select class="pick center-align browser-default">
						    <option disabled selected>Log In As</option>
						    <option value="1">Applicant</option>
						    <option value="2">Employer</option>
						    <option value="3">Admin</option>
						  </select>
						
						<div class="input-field">
							<i class="material-icons prefix">email</i>
							<input type="email" name="email" class="validate">
							<label>Enter email</label>
						</div>
								  
						<div class="input-field">
							<i class="material-icons prefix">lock</i>
							<input type="password" name="pass1">
							<label>Enter password</label>
						</div>
							
							 <!-- Modal Trigger -->
  							<a class="waves-effect waves-light modal-trigger" href="#modal1"><span class="create">Create an Account?</span> Register Here</a>
							<!-- Modal Structure -->
						  <div id="modal1" class="modal">
						    <div class="modal-content">
						      <h3 class="center reg">UBRA</h3>
									<p class="center">Register As</p>
										<p class="center">
											<a class="waves-effect blue btn-large" href="UserRegistration1.html">Applicant</a>
							      	<a class="waves-effect blue btn-large">Employer</a>
						    		</p>
						    </div>
						  </div>
          
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