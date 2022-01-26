<!DOCTYpE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Registration Step 4</title>

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
				color: white;
			}

			.btn1{
				background-color:#03a9f4; ;
			}
			
			.btn2{
				background-color: green;
			}

			.step{
				font-weight: bold;
			}

			.card-panel{
				margin-top:35px;
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
						<p class="step center">Step 4 - Work</p>

						<div class="input-field col s12">
						<p class="center">
							<a class="waves-effect blue btn"><i class="material-icons left">add</i>Add Work</a>
						</p>
						</div>

						<div class="input-field col s8">
							<input type="text" class="datepicker" placeholder="mm/dd/yy">
							<span class="helper-text" >From</span>
						</div>

						<div class="input-field col s4">
							 <form action="#">
							    <p>
							      <label>
							        <input type="checkbox" />
							        <span>Up to Present?</span>
							      </label>
							    </p>
							  </form>
						</div>

						<div class="input-field col s12">
							<input type="text" class="datepicker" placeholder="mm/dd/yy">
							<span class="helper-text" >To</span>
						</div>

						<div class="input-field col s12">
							<input type="text" name="position" class="validate">
							<span class="helper-text" >Position Title</span>
						</div>

						<div class="input-field col s12">
							<input type="text" name="agency" class="validate">
							<span class="helper-text" >Agency/Company</span>
						</div>

						<div class="input-field col s12">
							<input type="text" name="status" class="validate">
							<span class="helper-text" >Status Appointment</span>
						</div>

							<p class="center">
							<a href="UserRegistration3.php" class="waves-effect waves-light btn blue">PREVIOUS</a>
							<a href="Login.php" class="waves-effect waves-light btn blue">Finish</a>
							</p>
							
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
