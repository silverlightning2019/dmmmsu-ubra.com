<!DOCTYpE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Registration Step 2</title>

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
			
			.btn2{
				background-color: green;
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
						<p class="step center">Step 2 - Personal</p>

						<div class="input-field col s6">
							<input type="text" name="province" class="validate">
							<label>Province</label>
						</div>
						
						<div class="input-field col s6">
							<input type="text" name="municipality" class="validate">
							<label>Municipality</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="barangay" class="validate">
							<label>Barangay</label>
						</div>
								
						<div class="input-field col s6">
							<input type="text" name="house" class="validate">
							<label>House/Block/Number</label>
						</div>
							
						<div class="input-field col s6">
							<input type="text" class="datepicker">
							<label>Birthday</label>
						</div>
						
						<div class="input-field col s6">
							<input type="text" name="age" class="validate">
							<label>Age</label>
						</div>

						<div class="input-field col s12">
							<input type="text" name="cnumber" class="validate">
							<label>Contact Number</label>
						</div>

						<div class="input-field col s6">
						    <select>
						      <option value="" disabled selected>Choose your option</option>
						      <option value="1">Male</option>
						      <option value="2">Female</option>
						    </select>
						    <label>Sex</label>
					  	</div>
						
						<div class="input-field col s6">
						    <select>
						      <option value="" disabled selected>Choose your option</option>
						      <option value="1">Single</option>
						      <option value="2">Married</option>
						      <option value="2">Widowed</option>
						      <option value="2">Separated</option>
						      <option value="2">Live In</option>
						    </select>
						    <label>Civil Status</label>
						  </div>

					  <div class="input-field col s12">
					    <select>
					      <option value="" disabled selected>Choose your option</option>
					      <option value="1">Employed</option>
					      <option value="2">Unemployed</option>
					    </select>
					    <label>Employment Status</label>
					  </div>
							
							
							<a href="UserRegistration1.php" class="cwaves-effect waves-light btn btn1">PREVIOUS</a>
							<a href="UserRegistration3.php" class="cwaves-effect waves-light btn btn1">NEXT</a>
							
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
